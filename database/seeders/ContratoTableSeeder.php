<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Contrato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContratoTableSeeder extends Seeder
{
    public function run(): void
    {
        $contratos = [
            [
                'descripcion' => 'POR NECESIDADES DEL MERCADO',
            ],
            [
                'descripcion' => 'POR OBRA O SERVICIO ESPECIFICO',
            ],
            [
                'descripcion' => 'PLAZO FIJO',
            ],
            [
                'descripcion' => 'POR RECONVERSIÓN EMPRESARIAL',
            ],
            [
                'descripcion' => 'OTROS',
            ],
        ];
        Contrato::insert($contratos);
    }
}
