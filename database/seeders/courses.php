<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([

            'start_date'=>'2021-05-03',
            'finish_date'=>'2021-05-06',
            'time'=>'10:00',
            'type_course'=>'A',
            'instructor_id'=>1,
            'site_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
        DB::table('courses')->insert([

            'start_date'=>'2021-05-03',
            'finish_date'=>'2021-05-06',
            'time'=>'18:00',
            'type_course'=>'B',
            'instructor_id'=>2,
            'site_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
        DB::table('courses')->insert([

            'start_date'=>'2021-05-17',
            'finish_date'=>'2021-05-20',
            'time'=>'10:00',
            'type_course'=>'c',
            'instructor_id'=>1,
            'site_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
        DB::table('courses')->insert([

            'start_date'=>'2021-05-03',
            'finish_date'=>'2021-05-03',
            'time'=>'10:00',
            'type_course'=>'D',
            'instructor_id'=>1,
            'site_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
    }
}
