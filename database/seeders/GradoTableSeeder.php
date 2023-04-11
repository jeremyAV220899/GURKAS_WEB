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
                'descripcion' => 'SECUNDARIA COMPLETA',
            ],
            [
                'descripcion' => 'SUPERIOR COMPLETO(INSTITUTO SUPERIOR, ETC)',
            ],
            [
                'descripcion' => 'UNIVERSITARIA COMPLETA',
            ],
            [
                'descripcion' => 'PRIMARIA COMPLETA',
            ],
            [
                'descripcion' => 'TÉCNICA COMPLETA',
            ],
            [
                'descripcion' => 'SECUNDARIA INCOMPLETA',
            ],
            [
                'descripcion' => 'SUPERIOR INCOMPLETO(INSTITUTO SUPERIOR, ETC)',
            ],
            [
                'descripcion' => 'UNIVERSITARIA INCOMPLETA',
            ],
        ];
        Grado::insert($grados);
    }
}
