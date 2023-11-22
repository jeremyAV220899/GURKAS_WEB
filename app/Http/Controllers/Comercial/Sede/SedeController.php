<?php

namespace App\Http\Controllers\Comercial\Sede;

use App\Http\Controllers\Controller;

use App\Models\Administrador\Sistema\Empresa;
use App\Models\Administrador\Sistema\Estado;
use App\Models\Comercial\Sede;
use App\Models\Comercial\Unidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class SedeController extends Controller
{
    public function index(){
        set_time_limit(300);
        $sedes = Sede::all();
        $unidades = Unidad::all();
        $estados = Estado::all();

        $datos = [
            'sedes' => $sedes,
            'unidades' => $unidades,
            'estados' => $estados
        ];

        return view('comercial.sede.index', $datos);
    }

    public function store (Request $request){
        set_time_limit(300);
        $sede = new Sede();
        $sede->nombre_sede=$request->nombre_sede;
        $sede->estado_id=$request->estado_id;
        $sede->cod_departamento=$request->departamento;
        $sede->cod_provincia=$request->provincia;
        $sede->cod_distrito=$request->distrito;
        $sede->direccion=$request->direccion;
        $sede->fecha_activacion=$request->fecha_activacion;
        $sede->fecha_baja=$request->fecha_baja;
        $sede->longitud=$request->longitud;
        $sede->latitud=$request->latitud;
        $sede->ubicacion=$request->ubicacion;
        $sede->contacto=$request->contacto;
        $sede->correo=$request->correo;
        $sede->celular=$request->celular;
        $sede->centro_costo=$request->centro_costo;
        $sede->unidad_id=$request->unidad_id;
        $sede->save();
        return redirect()->route('comercial.sede');
    }

    public function edit($id){
        $sede = Sede::find($id);
        $datos = [
            'sede' => $sede,
        ];
        return Response::json($datos);
    }

    public function ver($id){
        $sede = Sede::find($id);
        $datos = [
            'sede' => $sede,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $sede = Sede::find($id);
        $sede->nombre_sede=$request->nombre_sede;
        $sede->estado_id=$request->estado_id;
        $sede->cod_departamento=$request->departamento;
        $sede->cod_provincia=$request->provincia;
        $sede->cod_distrito=$request->distrito;
        $sede->direccion=$request->direccion;
        $sede->fecha_activacion=$request->fecha_activacion;
        $sede->fecha_baja=$request->fecha_baja;
        $sede->longitud=$request->longitud;
        $sede->latitud=$request->latitud;
        $sede->ubicacion=$request->ubicacion;
        $sede->contacto=$request->contacto;
        $sede->correo=$request->correo;
        $sede->celular=$request->celular;
        $sede->centro_costo=$request->centro_costo;
        $sede->unidad_id=$request->unidad_id;
        $sede->save();
        return redirect()->route('comercial.sede');
    }

    public function delete($id){
        try {
            $sede = Sede::find($id);
            $sede->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
