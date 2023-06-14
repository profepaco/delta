<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nombre'=>'Medicamentos',
            'descripcion'=>''
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'Equipo',
            'descripcion'=>''
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'Otros',
            'descripcion'=>''
        ]); 
    }
}
