<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Turno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurnoTableSeeder extends Seeder
{
    public function run(): void
    {
        $turnos = [
            [
                'nombre' => 'MAÑANA',
            ],
            [
                'nombre' => 'NOCHE',
            ],
        ];
        Turno::insert($turnos);
    }
}
