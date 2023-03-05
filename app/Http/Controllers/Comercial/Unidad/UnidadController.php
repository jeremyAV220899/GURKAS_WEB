<?php

namespace App\Http\Controllers\Comercial\Unidad;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Empresa;
use App\Models\Administrador\Sistema\Estado;
use App\Models\Comercial\Unidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class UnidadController extends Controller
{
    public function index(){
       
        $vista = DB::table('unidades')
            ->select('unidades.id','unidades.cod_unidad','unidades.razon_social','unidades.ruc','empresas.nombre as emp','estados.nombre as est')
            ->join('empresas', 'empresas.id', '=', 'unidades.id_empresa')
            ->join('estados', 'estados.id', '=', 'unidades.id_estado')
            ->get();

        $datos = [
            'estados' => Estado::all(),
            'empresas' => Empresa::all(),
            'unidades' => Unidad::all(),
        ];
        return view('comercial.unidad.index', $datos,['vista' => $vista]);
    }

    public function store (Request $request){
        $unidad = new Unidad;
        $unidad->cod_unidad=$request->cod_unidad;
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

    public function edit($id){
        $unidad = Unidad::find($id);
        $datos = [
            'unidad' => $unidad,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $unidad = Unidad::find($id);
        $unidad->cod_unidad=$request->cod_unidad;
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
