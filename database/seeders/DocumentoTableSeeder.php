<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Documento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoTableSeeder extends Seeder
{
    public function run(): void
    {
        $documentos = [
            [
                'nombre' => 'DNI',
            ],
            [
                'nombre' => 'CARNET DE EXTRANJERIA',
            ],
        ];
        Documento::insert($documentos);
    }
}
