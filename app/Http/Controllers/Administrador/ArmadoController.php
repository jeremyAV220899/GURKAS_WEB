<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Armado;
use Illuminate\Http\Request;
use Response;

class ArmadoController extends Controller
{
    public function index()
    {
        $armados = Armado::all();
        return view('administrador.armado', compact('armados'));
    }
    public function store (Request $request){
        $armado = new Armado();
        $armado->descripcion=$request->descripcion;
        $armado->save();
        return redirect()->route('administrador.sistemas.armado');
    }

    public function edit($id){
        $armado = Armado::find($id);
        $datos = [
            'armado' => $armado,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $armado = Armado::find($id);
        $armado->descripcion=$request->descripcion;
        $armado->save();
        return redirect()->route('administrador.sistemas.armado');
    }

    public function delete($id){
        try {
            $armado = Armado::find($id);
            $armado->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
