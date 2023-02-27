<?php

namespace Database\Seeders;

use App\Models\Turno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $turnos = [
            [
                'nombre' => 'Día',
            ],
            [
                'nombre' => 'Noche',
            ]
        ];
        Turno::insert($turnos);
    }
}
