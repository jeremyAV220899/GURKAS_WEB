<?php

namespace App\Http\Controllers\Comercial\Unidad;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Empresa;
use App\Models\Administrador\Sistema\Estado;
use App\Models\Comercial\Unidad;
use Illuminate\Http\Request;
use Response;

class UnidadController extends Controller
{
    public function index(){
        $unidades = Unidad::all();
        $empresas = Empresa::all();
        $estados = Estado::all();

        $datos = [
            'unidades' => $unidades,
            'empresas' => $empresas,
            'estados' => $estados
        ];

        return view('comercial.unidad.index', $datos);
    }

    public function store (Request $request){
        $unidad = new Unidad();
        $unidad->razon_social=$request->razon_social;
        $unidad->ruc=$request->ruc;
        $unidad->nombre_comercial=$request->nombre_comercial;
        $unidad->cod_departamento=$request->departamento;
        $unidad->cod_provincia=$request->provincia;
        $unidad->cod_distrito=$request->distrito;
        $unidad->direccion=$request->direccion;
        $unidad->represetante_legal=$request->represetante_legal;
        $unidad->doct_ident_repre_leg=$request->doct_ident_repre_leg;
        $unidad->cargo_repre_leg=$request->cargo_repre_leg;
        $unidad->contacto=$request->contacto;
        $unidad->telefono=$request->telefono;
        $unidad->celular=$request->celular;
        $unidad->correo=$request->correo;
        $unidad->centro_costo=$request->centro_costo;
        $unidad->estado_id=$request->estado_id;
        $unidad->empresa_id=$request->empresa_id;
        $unidad->longitud=$request->longitud;
        $unidad->latitud=$request->latitud;
        $unidad->fecha_activacion=$request->fecha_activacion;
        $unidad->fecha_baja=$request->fecha_baja;
        $unidad->save();
        return redirect()->route('comercial.unidad');
    }

    public function edit($id){
        $unidad = Unidad::find($id);
        $datos = [
            'unidad' => $unidad,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $unidad = Unidad::find($id);
        $unidad->razon_social=$request->razon_social;
        $unidad->ruc=$request->ruc;
        $unidad->nombre_comercial=$request->nombre_comercial;
        $unidad->cod_departamento=$request->departamento;
        $unidad->cod_provincia=$request->provincia;
        $unidad->cod_distrito=$request->distrito;
        $unidad->direccion=$request->direccion;
        $unidad->represetante_legal=$request->represetante_legal;
        $unidad->doct_ident_repre_leg=$request->doct_ident_repre_leg;
        $unidad->cargo_repre_leg=$request->cargo_repre_leg;
        $unidad->contacto=$request->contacto;
        $unidad->telefono=$request->telefono;
        $unidad->celular=$request->celular;
        $unidad->correo=$request->correo;
        $unidad->centro_costo=$request->centro_costo;
        $unidad->id_estado=$request->id_estado;
        $unidad->id_empresa=$request->id_empresa;
        $unidad->longitud=$request->longitud;
        $unidad->latitud=$request->latitud;
        $unidad->fecha_activacion=$request->fecha_activacion;
        $unidad->fecha_baja=$request->fecha_baja;
        $unidad->save();
        return redirect()->route('comercial.unidad');
    }

    public function delete($id){
        try {
            $unidad = Unidad::find($id);
            $unidad->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }

}
