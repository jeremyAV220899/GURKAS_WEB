<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Banco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BancoTableSeeder extends Seeder
{
    public function run(): void
    {
        $bancos = [
            [
                'codigo' => 'BBVA',
                'descripcion' => 'Banco Bilvao Vizcaya Argentaria',
            ],
            [
                'codigo' => 'BCP',
                'descripcion' => 'Banco de Crédito del Perú',
            ],
            [
                'codigo' => 'BN',
                'descripcion' => 'Banco de la Nación',
            ],
            [
                'codigo' => 'BFALABELLA',
                'descripcion' => 'Banco Falabella',
            ],
            [
                'codigo' => 'INTERBANK',
                'descripcion' => 'Banco Interbank',
            ],            
            [
                'codigo' => 'SCOTIABANK',
                'descripcion' => 'Banco Scotiabank',
            ],
            [
                'codigo' => 'NO TIENE',
                'descripcion' => 'NO TIENE',
            ],
        ];
        Banco::insert($bancos);
    }
}
