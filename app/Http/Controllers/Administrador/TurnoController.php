<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Turno;
use Illuminate\Http\Request;
use Response;

class TurnoController extends Controller
{
    public function index()
    {
        $turnos = Turno::all();
        return view('administrador.turno', compact('turnos'));
    }
    public function store (Request $request){
        $turno = new Turno();
        $turno->nombre=$request->nombre;
        $turno->save();
        return redirect()->route('administrador.sistemas.turno');
    }

    public function edit($id){
        $turno = Turno::find($id);
        $datos = [
            'turno' => $turno,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $turno = Turno::find($id);
        $turno->nombre=$request->nombre;
        $turno->save();
        return redirect()->route('administrador.sistemas.turno');
    }

    public function delete($id){
        try {
            $turno = Turno::find($id);
            $turno->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
