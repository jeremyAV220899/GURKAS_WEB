<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Nacionalidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NacionalidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nacionalidades = [
            [
                'nombre' => 'PERUANO(A)',
            ],
            [
                'nombre' => 'EXTRANJERO(A)',
            ],
        ];
        Nacionalidad::insert($nacionalidades);
    }
}
