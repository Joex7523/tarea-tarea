<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'nombre'=>'mundo sofware',
            'nit'=>'23234',
            'direccion'=>'calle 65 norte',
            
            'descripcion'=>'desarrolla sofware educativo'

          

        ]);
    }
}
