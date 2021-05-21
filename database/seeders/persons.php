<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class persons extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert([
            'name'=>'gerardo',
            'last_name'=>'Britez',
            'dni'=> '35204878',
            'date_birth'=>'1992-06-01',
            'number_tel'=>'3704554869',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('persons')->insert([
            'name'=>'romina',
            'last_name'=>'Britez',
            'dni'=> '35204868',
            'date_birth'=>'1989-06-01',
            'number_tel'=>'3704554869',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('persons')->insert([
            'name'=>'rolando',
            'last_name'=>'squavi',
            'dni'=> '35204878',
            'date_birth'=>'1994-04-02',
            'number_tel'=>'115554869',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('persons')->insert([
            'name'=>'julieta',
            'last_name'=>'salinas',
            'dni'=> '37204878',
            'date_birth'=>'1993-05-02',
            'number_tel'=>'3704554869',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
