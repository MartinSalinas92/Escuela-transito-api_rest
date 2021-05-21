<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class address extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([

            'neighborhood'=>'Illia 2',
            'street'=>'arenales y mouchard',
            'nro_house'=>15,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
        DB::table('addresses')->insert([

            'neighborhood'=>'fontana',
            'street'=>'territorio nacionales y maipu',
            'nro_house'=>15,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
        DB::table('addresses')->insert([

            'neighborhood'=>'Independecia',
            'street'=>'lelong y cordoba',
            'nro_house'=>123,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
        DB::table('addresses')->insert([

            'neighborhood'=>'San Martin',
            'street'=>'eva peron y paraguay',
            'nro_house'=>177,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
        DB::table('addresses')->insert([

            'neighborhood'=>'San Francisco',
            'street'=>'avenida Sargento Cabral',
            'nro_house'=>177,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
    }
}
