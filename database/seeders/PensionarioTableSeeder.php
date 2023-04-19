<?php

namespace Database\Seeders;

use App\Models\Administrador\Regimen\Pensionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PensionarioTableSeeder extends Seeder
{
    public function run(): void
    {
        $pensionarios = [
            [
                'nombre' => 'SISTEMA NACIONAL DE PENSIONES - ONP',
            ],
            [
                'nombre' => 'PENSIONARIO',
            ],
            [
                'nombre' => 'SIN REGIMEN PENSIONARIO',
            ],
            [
                'nombre' => 'SISTEMA PRIVADO DE PENSIONES',
            ],
        ];
        Pensionario::insert($pensionarios);
    }
}
