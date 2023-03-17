<?php

namespace App\Http\Controllers\CentroControl;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Empresa;
use App\Models\Administrador\Sistema\Turno;
use App\Models\Comercial\Sede;
use App\Models\Comercial\Unidad;
use App\Models\RRHH\Personal;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index()
    {
        $datos = [
            'personales' => Personal::all(),
            'turnos' => Turno::all(),
            'empresas' => Empresa::all(),
            'unidades' => Unidad::all(),
            'sedes' => Sede::all(),
        ];
        return view('centro-control.asistencia',$datos);
    }
}
