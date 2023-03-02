<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Genero;
use Illuminate\Http\Request;
use Response;

class GeneroController extends Controller
{
    public function index()
    {
        $generos = Genero::all();
        return view('administrador.genero', compact('generos'));
    }
    public function store (Request $request){
        $genero = new Genero();
        $genero->nombre=$request->descripcionGenero;
        $genero->save();
        return redirect()->route('administrador.sistemas.genero');
    }
    public function edit($id){
        $genero = Genero::find($id);
        $datos = [
            'genero' => $genero,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $genero = Genero::find($id);
        $genero->nombre=$request->descripcionGenero;
        $genero->save();
        return redirect()->route('administrador.sistemas.genero');
    }

    public function delete($id){
        try {
            $genero = Genero::find($id);
            $genero->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
