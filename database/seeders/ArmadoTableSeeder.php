<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Armado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArmadoTableSeeder extends Seeder
{
    public function run(): void
    {
        $armados = [
            [
                'descripcion' => 'AGENTE ARMADO',
            ],
            [
                'descripcion' => 'AGENTE NO ARMADO',
            ],
        ];
        Armado::insert($armados);
    }
}
