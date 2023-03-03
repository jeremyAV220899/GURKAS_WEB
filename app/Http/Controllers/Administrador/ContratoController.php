<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Contrato;
use Illuminate\Http\Request;
use Response;

class ContratoController extends Controller
{
    public function index()
    {
        $contratos = Contrato::all();
        return view('administrador.contrato', compact('contratos'));
    }
    public function store (Request $request){
        $contrato = new Contrato();
        $contrato->descripcion=$request->descripcion;
        $contrato->save();
        return redirect()->route('administrador.sistemas.contrato');
    }

    public function edit($id){
        $contrato = Contrato::find($id);
        $datos = [
            'contrato' => $contrato,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $contrato = Contrato::find($id);
        $contrato->descripcion=$request->descripcion;
        $contrato->save();
        return redirect()->route('administrador.sistemas.contrato');
    }

    public function delete($id){
        try {
            $contrato = Contrato::find($id);
            $contrato->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
