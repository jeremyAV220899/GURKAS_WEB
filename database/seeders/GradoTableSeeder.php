<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Grado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradoTableSeeder extends Seeder
{
    public function run(): void
    {
        $grados = [
            [
                'descripcion' => 'UNIVERSITARIO',
            ],
            [
                'descripcion' => 'TÉCNICO',
            ],
        ];
        Grado::insert($grados);
    }
}
