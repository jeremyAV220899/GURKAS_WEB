<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Grado;
use Illuminate\Http\Request;
use Response;

class GradoController extends Controller
{
    public function index()
    {
        $grados = Grado::all();
        return view('administrador.grado', compact('grados'));
    }
    public function store (Request $request){
        $grado = new Grado();
        $grado->descripcion=$request->descripcion;
        $grado->save();
        return redirect()->route('administrador.sistemas.grado');
    }

    public function edit($id){
        $grado = Grado::find($id);
        $datos = [
            'grado' => $grado,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $grado = Grado::find($id);
        $grado->descripcion=$request->descripcion;
        $grado->save();
        return redirect()->route('administrador.sistemas.grado');
    }

    public function delete($id){
        try {
            $grado = Grado::find($id);
            $grado->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
