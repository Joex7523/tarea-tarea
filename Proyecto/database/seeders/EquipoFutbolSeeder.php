<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoFutbolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipo_futbols')->insert([
            'nombre'=>'imllonarios fc',
            'ciudadOrigen'=>'bogota',
            'ligaPertenece'=>'betplay',
            'apodo'=>'embajadores',
            'correo'=>'azules@gmail.com',
            'web'=>'azules.com',
            'telefono'=>'102332'

          

        ]);
    }
}
