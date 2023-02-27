<?php

namespace Database\Seeders;

use App\Models\Nacionalidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NacionalidadesTableSeeder extends Seeder
{
    public function run(): void
    {
        $nacionalidades = [
            [
                'nombre' => 'Peruano(a)',
            ],
            [
                'nombre' => 'Extranjero',
            ]
        ];
        Nacionalidad::insert($nacionalidades);
    }
}
