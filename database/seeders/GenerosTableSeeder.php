<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generos = [
            [
                'nombre' => 'Masculino',
            ],
            [
                'nombre' => 'Femenino',
            ]
        ];
        Genero::insert($generos);
    }
}
