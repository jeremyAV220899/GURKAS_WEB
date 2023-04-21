<?php

namespace Database\Seeders;

use App\Models\Administrador\Regimen\Comision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comisiones = [
            [
                'nombre' => 'ONP',
            ],
            [
                'nombre' => 'PENSIONISTA',
            ],
            [
                'nombre' => 'SIN REGIMEN PENSIONARIO',
            ],
            [
                'nombre' => 'FLUJO',
            ],
            [
                'nombre' => 'MIXTA',
            ]
        ];
        Comision::insert($comisiones);
    }
}
