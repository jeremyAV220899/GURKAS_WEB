<?php

namespace Database\Seeders;

use App\Models\Comercial\Sede;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SedeTableSeeder extends Seeder
{
    public function run(): void
    {
        $sedes = [
            [
                'nombre_sede' => 'REFINERIA PETRO PERU',
                'estado_id' => 1,
                'cod_departamento' => 15,
                'cod_provincia' => 1501,
                'cod_distrito' => 150143,
                'fecha_activacion' => '2023/03/17 00:00:00',
                'unidad_id' => 1,
            ]
        ];
        Sede::insert($sedes);
    }
}
