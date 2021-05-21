<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sitios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([

            'name'=>'costanera',
            'address_id'=>4,
            'status'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);
        DB::table('sites')->insert([

            'name'=>'illia',
            'address_id'=>1,
            'status'=>0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);
        DB::table('sites')->insert([

            'name'=>'galpon fontana',
            'address_id'=>2,
            'status'=>0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);
        DB::table('sites')->insert([

            'name'=>'valores_ciudadanos',
            'address_id'=>5,
            'status'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);
    }
}
