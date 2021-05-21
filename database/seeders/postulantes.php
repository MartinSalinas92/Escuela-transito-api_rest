<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postulantes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postulantes')->insert([
            'person_id'=>3,
            'address_id'=>1,
            'tipo_licencia'=>'A',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('postulantes')->insert([
            'person_id'=>4,
            'address_id'=>3,
            'tipo_licencia'=>'B',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
