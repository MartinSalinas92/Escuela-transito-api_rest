<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class instructors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructors')->insert([
            'person_id'=>1,
            'status'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
        DB::table('instructors')->insert([
            'person_id'=>2,
            'status'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
    }
}
