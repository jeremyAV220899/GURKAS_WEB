<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Banco;
use Illuminate\Http\Request;
use Response;

class BancoController extends Controller
{
    public function index()
    {
        $bancos = Banco::all();
        return view('administrador.banco', compact('bancos'));
    }
    
    public function store (Request $request){
        $banco = new Banco();
        $banco->codigo=$request->codigo;
        $banco->descripcion=$request->descripcion;
        $banco->save();
        return redirect()->route('administrador.sistemas.banco');
    }

    public function edit($id){
        $banco = Banco::find($id);
        $datos = [
            'banco' => $banco,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $banco = Banco::find($id);
        $banco->codigo=$request->codigo;
        $banco->descripcion=$request->descripcion;
        $banco->save();
        return redirect()->route('administrador.sistemas.banco');
    }

    public function delete($id){
        try {
            $banco = Banco::find($id);
            $banco->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
