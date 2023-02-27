<?php

namespace Database\Seeders;

use App\Models\Talla;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TallasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tallas = [
            [
                'nombre' => 'XS',
            ],
            [
                'nombre' => 'S',
            ],
            [
                'nombre' => 'M',
            ],
            [
                'nombre' => 'L',
            ],
            [
                'nombre' => 'XL',
            ],
            [
                'nombre' => 'XXL',
            ],
        ];
        Talla::insert($tallas);
    }
}
