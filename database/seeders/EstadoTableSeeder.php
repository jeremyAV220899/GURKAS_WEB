<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    public function run(): void
    {
        $estados = [
            [
                'nombre' => 'ACTIVO',
            ],
            [
                'nombre' => 'BAJA',
            ],
        ];
        Estado::insert($estados);
    }
}
