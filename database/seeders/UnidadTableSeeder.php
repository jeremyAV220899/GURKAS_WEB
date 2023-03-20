<?php

namespace Database\Seeders;

use App\Models\Comercial\Unidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadTableSeeder extends Seeder
{
    public function run(): void
    {
        $unidades = [
            [
                'razon_social' => 'GRUPO GURKAS SAC',
                'ruc' => '20546468101',
                'nombre_comercial' => 'GRUPO GURKAS SAC',
                'cod_departamento' => 15,
                'cod_provincia' => 1501,
                'cod_distrito' => 150133,
                'estado_id' => 1,
                'empresa_id' => 1,
                'fecha_activacion' => '2023/03/17 00:00:00'
            ]
        ];
        Unidad::insert($unidades);
    }
}
