<?php

namespace Database\Seeders;

use App\Models\Administrador\Regimen\Afp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AfpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $afps = [
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
                'nombre' => 'SPP INTEGRA',
            ],
            [
                'nombre' => 'SPP HORIZONTE',
            ],
            [
                'nombre' => 'SPP PROFUTURO',
            ],
            [
                'nombre' => 'SPP PRIMA',
            ],
            [
                'nombre' => 'SPP HABITAT',
            ],
        ];
        Afp::insert($afps);
    }
}
