<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Situacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SituacionTableSeeder extends Seeder
{
    public function run(): void
    {
        $situaciones = [
            [
                'descripcion' => 'CASADO',
            ],
            [
                'descripcion' => 'SOLTERO',
            ],
            [
                'descripcion' => 'DIVORCIADO',
            ],
            [
                'descripcion' => 'CONVIVIENTE',
            ],
            [
                'descripcion' => 'VIUDO',
            ],
        ];
        Situacion::insert($situaciones);
    }
}
