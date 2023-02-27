<?php

namespace Database\Seeders;

use App\Models\Hora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horas = [
            [
                'nombre' => '8 Horas',
            ],
            [
                'nombre' => '12 Horas',
            ]
        ];
        Hora::insert($horas);
    }
}
