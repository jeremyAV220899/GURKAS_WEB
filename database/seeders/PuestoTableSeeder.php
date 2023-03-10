<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Puesto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuestoTableSeeder extends Seeder
{
    public function run(): void
    {
        $puestos = [
            [
                'descripcionPuesto' => 'AGENTE DE SEGURIDAD',
                'codigo' => 'AVP',
            ],
            [
                'descripcionPuesto' => 'AGENTE ACUARTELADO',
                'codigo' => 'AVP',
            ],
            [
                'descripcionPuesto' => 'ASISTENTE COMERCIAL',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'ASISTENTE CONTABLE',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'ASISTENTE DE GERENCIA',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'ASISTENTE DE OPERACIONES',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'ASISTENTE DE PLANILLAS',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'ASISTENTE DE RECURSOS HUMANOS',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'ASISTENTE DE RRHH',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'ASISTENTE LOGISTICO',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'AUXILIAR DE RECURSOS HUMANOS',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'COORDINADOR DE OPERACIONES',
                'codigo' => 'COOR',
            ],
            [
                'descripcionPuesto' => 'COORDINADOR DE RECURSOS HUMANOS',
                'codigo' => 'COOR',
            ],
            [
                'descripcionPuesto' => 'COORDINADOR SUCAMEC',
                'codigo' => 'COOR',
            ],
            [
                'descripcionPuesto' => 'EJECUTIVO COMERCIAL',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'ENCARGADA DE MANTENIMIENTO',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'GERENTE COMERCIAL',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'GERENTE DE ADMINISTRACION',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'GERENTE DE OPERACIONES',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'GERENTE GENERAL',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'JEFE DE CONTABILIDAD',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'JEFE DE LICITACIONES',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'JEFE DE RECURSOS HUMANOS',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'JEFE DE SEGURIDAD',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'JEFE DE SISTEMAS',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'OPERADOR CCTV',
                'codigo' => 'CCTV',
            ],
            [
                'descripcionPuesto' => 'OPERADOR CENTRO CONTROL',
                'codigo' => 'OCC',
            ],
            [
                'descripcionPuesto' => 'PRACTICANTE DE CONTABILIDAD',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'RESGUARDO',
                'codigo' => 'AVP',
            ],
            [
                'descripcionPuesto' => 'SUPERVISOR ZONAL',
                'codigo' => 'SUP',
            ],
            [
                'descripcionPuesto' => 'SUPERVISOR RESIDENTE',
                'codigo' => 'SUP',
            ],
            [
                'descripcionPuesto' => 'ASISTENTE ADMINISTRATIVO',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'PRACTICANTE DE SISTEMAS',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'PRACTICANTE DE RECURSOS HUMANOS',
                'codigo' => 'ADM',
            ],
            [
                'descripcionPuesto' => 'RECEPCIONISTA',
                'codigo' => 'REC',
            ],
            [
                'descripcionPuesto' => 'GESTOR DE ACCESOS',
                'codigo' => 'GCA',
            ],
            [
                'descripcionPuesto' => 'JEFE DE GRUPO',
                'codigo' => 'JEF',
            ],
        ];
        Puesto::insert($puestos);
    }
}
