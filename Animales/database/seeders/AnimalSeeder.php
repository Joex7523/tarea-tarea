<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('animals')->insert([
            'nombre'=>'leon',
            'tipo'=>'depredador',
            'color'=>'amarillo',
            'especie'=>'carnivoro',
            'edad'=>'10'

          

        ]);
    }
}
