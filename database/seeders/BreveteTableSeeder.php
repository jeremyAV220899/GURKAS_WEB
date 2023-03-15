<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Brevete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreveteTableSeeder extends Seeder
{
    public function run(): void
    {
        $brevetes = [
            [
                'nombre' => 'No tiene',
            ],
            [
                'nombre' => 'A-I',
            ],
            [
                'nombre' => 'A-IIA',
            ],
            [
                'nombre' => 'A-IIB',
            ],
            [
                'nombre' => 'A-IIIA',
            ],
            [
                'nombre' => 'A-IIIB',
            ],
            [
                'nombre' => 'A-IIIC',
            ],
            [
                'nombre' => 'B-I',
            ],
            [
                'nombre' => 'B-IIA',
            ],
            [
                'nombre' => 'B-IIB',
            ],
            [
                'nombre' => 'B-IIC',
            ],
        ];
        Brevete::insert($brevetes);
    }
}
