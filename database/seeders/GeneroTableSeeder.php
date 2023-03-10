<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroTableSeeder extends Seeder
{
    public function run(): void
    {
        $generos = [
            [
                'nombre' => 'Masculino',
            ],
            [
                'nombre' => 'Femenino',
            ],
        ];
        Genero::insert($generos);
    }
}
