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
        $personal = Personal::find($id);
        $estados = Estado::all();
        $response = [
            'email' => $personal->correo,
            'idEstado' => $personal->estado_id,
            'estados' => $estados,
            'idPersonal' => $personal->id
        ];

        return Response::json($response);
    }
}
