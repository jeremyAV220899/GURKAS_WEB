<?php

namespace Database\Seeders;

use App\Models\Administrador\Sistema\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    public function run(): void
    {
        $empresas = [
            [
                'nombre' => 'GRUPO GURKAS S.A.C',
                'ruc' => '20546468101',
                'estado_id' => 1,
                'direccion' => 'CAL.MAXIMILIANO CARRANZA NRO. 886 INT. 888 LIMA - LIMA - SAN JUAN DE MIRAFLORES'
            ],
            [
                'nombre' => 'CONSORCIO GURKAS S.A.C',
                'ruc' => '20603200587',
                'estado_id' => 1,
                'direccion' => 'AV. LIZARDO MONTER NRO. 431 OTR. AV. LIZARDO MONTERO NRO.431 2DO PISO , ZONA A LIMA - LIMA - SAN JUAN DE MIRAFLORES'
            ],
            [
                'nombre' => 'CONSORCIO TECSEGUR',
                'ruc' => '20609633710',
                'estado_id' => 1,
                'direccion' => 'URB. SANTA LEONOR ET. DOS, PRO. ARIOSTO MATELLINI,CHORRILLOS,LIMA'
            ],
        ];
        Empresa::insert($empresas);
    }
}
