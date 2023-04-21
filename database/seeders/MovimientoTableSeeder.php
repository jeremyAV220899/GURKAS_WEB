<?php

namespace Database\Seeders;

use App\Models\Administrador\Regimen\Movimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movimientos = [
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
                'nombre' => 'INICIO DE RELACION LABORAL',
            ]
        ];
        Movimiento::insert($movimientos);
    }
}
