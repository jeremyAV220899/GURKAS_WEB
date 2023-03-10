<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Hora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HoraTableSeeder extends Seeder
{
    public function run(): void
    {
        $horas = [
            [
                'nombre' => '8 HORAS',
            ],
            [
                'nombre' => '12 HORAS',
            ],
        ];
        Hora::insert($horas);
    }
}
