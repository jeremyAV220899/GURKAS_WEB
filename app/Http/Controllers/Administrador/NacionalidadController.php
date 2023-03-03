<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Nacionalidad;
use Illuminate\Http\Request;
use Response;

class NacionalidadController extends Controller
{
    public function index()
    {
        $nacionalidades = Nacionalidad::all();
        return view('administrador.nacionalidad', compact('nacionalidades'));
    }

    public function store (Request $request){
        $nacionalidad = new Nacionalidad();
        $nacionalidad->nombre=$request->descripcionNacionalidad;
        $nacionalidad->save();
        return redirect()->route('administrador.sistemas.nacionalidad');
    }

    public function edit($id){
        $nacionalidad = Nacionalidad::find($id);
        $datos = [
            'nacionalidad' => $nacionalidad,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $nacionalidad = Nacionalidad::find($id);
        $nacionalidad->nombre=$request->descripcionNacionalidad;
        $nacionalidad->save();
        return redirect()->route('administrador.sistemas.nacionalidad');
    }

    public function delete($id){
        try {
            $nacionalidad = Nacionalidad::find($id);
            $nacionalidad->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
