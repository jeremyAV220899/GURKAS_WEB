<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Puesto;
use Illuminate\Http\Request;
use Response;

class PuestoController extends Controller
{
    public function index()
    {
        $puestos = Puesto::all();
        return view('administrador.puesto', compact('puestos'));
    }
    public function store (Request $request){
        $puesto = new Puesto();
        $puesto->descripcionPuesto=$request->descripcionPuesto;
        $puesto->codigo=$request->codigo;
        $puesto->save();
        return redirect()->route('administrador.sistemas.puesto');
    }

    public function edit($id){
        $puesto = Puesto::find($id);
        $datos = [
            'puesto' => $puesto,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $puesto = Puesto::find($id);
        $puesto->descripcionPuesto=$request->descripcionPuesto;
        $puesto->codigo=$request->codigo;
        $puesto->save();
        return redirect()->route('administrador.sistemas.puesto');
    }

    public function delete($id){
        try {
            $puesto = Puesto::find($id);
            $puesto->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
