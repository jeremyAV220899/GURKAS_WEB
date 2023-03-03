<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Empresa;
use App\Models\Estado;
use Illuminate\Http\Request;
use Response;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        $estados = [
            'estados' => Estado::all(),
        ];
        return view('administrador.empresa',$estados, compact('empresas'));
    }
    public function store (Request $request){
        $empresa = new Empresa();
        $empresa->nombre=$request->nombre;
        $empresa->ruc=$request->ruc;
        $empresa->estado_id=$request->estadoid;
        $empresa->direccion=$request->direccion;
        $empresa->save();
        return redirect()->route('administrador.sistemas.empresa');
    }

    public function edit($id){
        $empresa = Empresa::find($id);
        $datos = [
            'empresa' => $empresa,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $empresa = Empresa::find($id);
        $empresa->nombre=$request->nombre;
        $empresa->ruc=$request->ruc;
        $empresa->estado_id=$request->estadoid;
        $empresa->direccion=$request->direccion;
        $empresa->save();
        return redirect()->route('administrador.sistemas.empresa');
    }

    public function delete($id){
        try {
            $empresa = Empresa::find($id);
            $empresa->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
