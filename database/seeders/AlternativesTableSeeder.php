<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternativesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('alternatives')->delete();

        DB::table('alternatives')->insert(
            [
                [
                    'id' => 1,
                    'alternative' => 'Dosen A',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 2,
                    'alternative' => 'Dosen B',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 3,
                    'alternative' => 'Dosen C',
                    'created_at' => Carbon::now(),
                ],
            ]
        );
    }
}
