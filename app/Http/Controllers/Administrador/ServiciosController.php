<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Estado;
use App\Models\Comercial\Sede;
use App\Models\RRHH\Personal;
use Illuminate\Http\Request;
use Response;

class ServiciosController extends Controller
{
    public function getSedesByUnidad($id){
        $sedes = Sede::where('unidad_id', $id)->get();
        return Response::json($sedes);
    }

    public function getEstadosByPersonal($id){
        $estados = Estado::where('estado_id', $id)->get();
        return Response::json($estados);
    }
}
