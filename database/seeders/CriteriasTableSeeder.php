<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterias')->delete();

        DB::table('criterias')->insert(
            [
                [
                    'id' => 1,
                    'criteria' => 'Teknik Pengajaran',
                    'weight' => 5,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 2,
                    'criteria' => 'Penyampaian Materi',
                    'weight' => 7,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 3,
                    'criteria' => 'Materi',
                    'weight' => 6,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 4,
                    'criteria' => 'Kedisiplinan',
                    'weight' => 6,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 5,
                    'criteria' => 'Sikap',
                    'weight' => 8,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 6,
                    'criteria' => 'Interaksi',
                    'weight' => 6,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 7,
                    'criteria' => 'Penguasaan Materi',
                    'weight' => 9,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 8,
                    'criteria' => 'Komunikasi',
                    'weight' => 5,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 9,
                    'criteria' => 'Kepedulian',
                    'weight' => 7,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 10,
                    'criteria' => 'Aksesibilitas',
                    'weight' => 4,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 11,
                    'criteria' => 'Penggunaan Teknologi',
                    'weight' => 4,
                    'type' => 'benefit',
                    'created_at' => Carbon::now(),
                ],
            ]
        );
    }
}
