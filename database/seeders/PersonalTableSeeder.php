<?php

namespace Database\Seeders;

use App\Models\RRHH\Personal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PersonalTableSeeder extends Seeder
{
    public function run(): void
    {
        $personales = [
            [
                'cod_empleado' => 'ADM71269685',
                'nombre_empleado' => 'Juan Manuel',
                'apellido_paterno' => 'Ubillus',
                'apellido_materno' => 'Rivera',
                'nombre_completo' => 'Juan Manuel Ubillus Rivera',
                'fecha_nacimiento' => '1996/06/10 00:00:00',
                'genero_id' => '1',
                'documento_id' => '1',
                'doc_ident' => '71269685',
                'brevete_id' => '2',
                'nacionalidad_id' => '1',
                'cod_departamento' => '15',
                'cod_provincia' => '1501',
                'cod_distrito' => '150143',
                'horas_id' => '1',
                'situaciones_id' => '1',
                'grados_id' => '1',
                'estado_id' => '1',
                'puesto_id' => '1',
                'empresa_id' => '1',
                'contrato_id' => '1',
                'unidad_id' => '1',
                'sede_id' => '1',
                'turno_id' => '1',
                'armado_id' => '1',
                'talla_id' => '1',
            ],
            [
                'cod_empleado' => 'ADM71385575',
                'nombre_empleado' => 'Jeremy Josue',
                'apellido_paterno' => 'Apaico',
                'apellido_materno' => 'Villena',
                'nombre_completo' => 'Jeremy Josue Apaico Villena',
                'fecha_nacimiento' => '1999/08/22 00:00:00',
                'genero_id' => '1',
                'documento_id' => '1',
                'doc_ident' => '71385575',
                'brevete_id' => '1',
                'nacionalidad_id' => '1',
                'cod_departamento' => '15',
                'cod_provincia' => '1501',
                'cod_distrito' => '150143',
                'horas_id' => '1',
                'situaciones_id' => '1',
                'grados_id' => '1',
                'estado_id' => '1',
                'puesto_id' => '1',
                'empresa_id' => '1',
                'contrato_id' => '1',
                'unidad_id' => '1',
                'sede_id' => '1',
                'turno_id' => '1',
                'armado_id' => '1',
                'talla_id' => '1',
            ]
        ];
        Personal::insert($personales);
    }
}
