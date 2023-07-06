<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('ratings')->delete();

        DB::table('ratings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'users_id' => 1,
                'courses_id' => 2,
                'rating' => 5.0,
                'comment' => 'Bagus banget ga sie',
            ),
            1 =>
            array (
                'id' => 3,
                'users_id' => 1,
                'courses_id' => 3,
                'rating' => 3.0,
                'comment' => 'oke oke aja sih',
            ),
        ));


    }
}
