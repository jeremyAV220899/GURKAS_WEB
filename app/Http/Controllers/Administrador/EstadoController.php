<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Estado;
use Illuminate\Http\Request;
use Response;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::all();
        return view('administrador.estado', compact('estados'));
    }
    public function store (Request $request){
        $estado = new Estado();
        $estado->nombre=$request->nombre;
        $estado->save();
        return redirect()->route('administrador.sistemas.estado');
    }

    public function edit($id){
        $estado = Estado::find($id);
        $datos = [
            'estado' => $estado,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $estado = Estado::find($id);
        $estado->nombre=$request->nombre;
        $estado->save();
        return redirect()->route('administrador.sistemas.estado');
    }

    public function delete($id){
        try {
            $estado = Estado::find($id);
            $estado->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
