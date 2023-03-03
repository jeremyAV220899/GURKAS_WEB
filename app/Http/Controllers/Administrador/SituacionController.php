<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Situacion;
use Illuminate\Http\Request;
use Response;
class SituacionController extends Controller
{
    public function index()
    {
        $situaciones = Situacion::all();
        return view('administrador.situacion', compact('situaciones'));
    }
    public function store (Request $request){
        $situacion = new Situacion();
        $situacion->descripcion=$request->descripcion;
        $situacion->save();
        return redirect()->route('administrador.sistemas.situacion');
    }

    public function edit($id){
        $situacion = Situacion::find($id);
        $datos = [
            'situacion' => $situacion,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $situacion = Situacion::find($id);
        $situacion->descripcion=$request->descripcion;
        $situacion->save();
        return redirect()->route('administrador.sistemas.situacion');
    }

    public function delete($id){
        try {
            $situacion = Situacion::find($id);
            $situacion->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
