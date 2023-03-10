<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Talla;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TallaTableSeeder extends Seeder
{
    public function run(): void
    {
        $tallas = [
            [
                'descripcion' => 'S',
            ],
            [
                'descripcion' => 'M',
            ],
            [
                'descripcion' => 'L',
            ],
            [
                'descripcion' => 'XL',
            ],
            [
                'descripcion' => '2XL',
            ],
            [
                'descripcion' => '3XL',
            ],
            [
                'descripcion' => '4XL',
            ],
            [
                'descripcion' => '5XL',
            ],
            [
                'descripcion' => '6XL',
            ],
            [
                'descripcion' => 'No tiene Talla',
            ],
        ];
        Talla::insert($tallas);
    }
}
