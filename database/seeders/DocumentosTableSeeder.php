<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentosTableSeeder extends Seeder
{
    public function run(): void
    {
        $documentos = [
            [
                'nombre' => 'DNI',
            ],
            [
                'nombre' => 'Carnet Extranjería',
            ],
            [
                'nombre' => 'Pasaporte',
            ]
        ];
        Documento::insert($documentos);
    }
}
