<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\AlternativeCriteria;
use App\Models\Criteria;

class WeightedProductController extends Controller
{
    public function index()
    {
        $criterias = Criteria::query()->skip(0)->take(6)->get();
        $alternatives = Alternative::get()->toArray();

        $criteria_weight_sum = $criterias->sum('weight');
        $criteria_count = $criterias->count();

        /**
         * Normalisasi Nilai Bobot
         */
        foreach ($criterias as $crt_key => $crt_value) {
            $criterias[$crt_key]['normalization'] = round($crt_value->weight / $criteria_weight_sum, 3);
        }

        /**
         * Menentukan Nilai Vector S
         */
        $total_vector_s = 0;

        foreach ($alternatives as $alt_key => $alt_value) {
            $attributes = array();

            $vector_s = 1;

            foreach ($criterias as $crt_value) {
                $query = AlternativeCriteria::query()
                    ->where('alternative_id', $alt_value['id'])
                    ->where('criteria_id', $crt_value['id']);

                $sum = $query->sum('member_value');
                $count = $query->count();
                $attribute_value = (int) floor($sum / $count);

                array_push($attributes, [
                    'id' => $crt_value->id,
                    'attribute' => $attribute_value,
                ]);

                $vector_s *= round(pow($attribute_value, $crt_value['normalization']), 3);
                // $vector_s *= pow($attribute_value, $crt_value['normalization']);
            }

            $alternatives[$alt_key]['criterias'] = $attributes;
            $alternatives[$alt_key]['vector_s'] = round($vector_s, 3);
            // $alternatives[$alt_key]['vector_s'] = $vector_s;
            $total_vector_s += $vector_s;
        }

        /**
         * Menentukan nilai Vector V
         */
        foreach ($alternatives as $alt_key => $alt_value) {
            $alternatives[$alt_key]['vector_v'] = round($alt_value['vector_s'] / $total_vector_s, 3);
        }

        /**
         * Normalisasi atribut (benefit)
         * 
         * uncomment this code if you need to normalizing the attributes
         */
        // foreach ($criterias as $crt_key => $crt_value) {
        //     $total_attribute = 0;

        //     foreach ($alternatives as $alt_key => $alt_value) {
        //         $total_attribute += $alt_value['criterias'][$crt_key]['attribute'];
        //     }


        //     foreach ($alternatives as $alt_key => &$alt_value) {
        //         $attribute_normalization = $alt_value['criterias'][$crt_key]['attribute'] / $total_attribute;
        //         $alt_value['criterias'][$crt_key]['attribute_normalization'] = $attribute_normalization;
        //     }
        // }

        // dd(collect($alternatives)->sortByDesc('vector_v'));

        return view('pages.weighted-product.index', compact('criterias', 'alternatives'));
    }
}
