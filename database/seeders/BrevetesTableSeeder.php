<?php

namespace Database\Seeders;

use App\Models\Brevete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrevetesTableSeeder extends Seeder
{
    public function run(): void
    {
        $brevetes = [
            [
                'nombre' => 'A-I',
            ],
            [
                'nombre' => 'A-IIa',
            ],
            [
                'nombre' => 'A-IIb',
            ],
            [
                'nombre' => 'A-IIIa',
            ],
            [
                'nombre' => 'A-IIIb',
            ],
            [
                'nombre' => 'A-IIIc',
            ],
            [
                'nombre' => 'B-I',
            ],
            [
                'nombre' => 'B-IIa',
            ],
            [
                'nombre' => 'B-IIb',
            ],
            [
                'nombre' => 'B-IIc',
            ],
        ];
        Brevete::insert($brevetes);
    }
}
