<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\SetsOfCriteria;

class CriteriaController extends Controller
{
    public function index() {
        $datas = Criteria::all();
        return view('pages.criteria.index', compact('datas'));
    }
    
    public function sets_of_criteria($id) {
        $criteria = Criteria::find($id)->criteria;
        $datas = SetsOfCriteria::whereCriteriaId($id)->get();
        return view('pages.criteria.sets.index', compact('datas', 'criteria'));
    }
}
