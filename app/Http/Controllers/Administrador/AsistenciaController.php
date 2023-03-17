<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Asistencia;
use Illuminate\Http\Request;
use Response;
class AsistenciaController extends Controller
{
     public function index()
    {
        $asistencias = Asistencia::all();
        return view('administrador.asistencia', compact('asistencias'));
    }
    public function store (Request $request){
        $asistencia = new Asistencia();
        $asistencia->codigo=$request->codigo;
        $asistencia->descripcion=$request->descripcion;
        $asistencia->penalidad=$request->penalidad;
        $asistencia->save();
        return redirect()->route('administrador.sistemas.asistencia');
    }

    public function edit($id){
        $asistencia = Asistencia::find($id);
        $datos = [
            'asistencia' => $asistencia,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $asistencia = Asistencia::find($id);
        $asistencia->codigo=$request->codigo;
        $asistencia->descripcion=$request->descripcion;
        $asistencia->penalidad=$request->penalidad;
        $asistencia->save();
        return redirect()->route('administrador.sistemas.asistencia');
    }

    public function delete($id){
        try {
            $asistencia = Asistencia::find($id);
            $asistencia->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
