<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Hora;
use Illuminate\Http\Request;
use Response;

class HoraController extends Controller
{
    public function index()
    {
        $horas = Hora::all();
        return view('administrador.hora', compact('horas'));
    }
    public function store (Request $request){
        $hora = new Hora();
        $hora->nombre=$request->nombre;
        $hora->save();
        return redirect()->route('administrador.sistemas.hora');
    }

    public function edit($id){
        $hora = Hora::find($id);
        $datos = [
            'hora' => $hora,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $hora = Hora::find($id);
        $hora->nombre=$request->nombre;
        $hora->save();
        return redirect()->route('administrador.sistemas.hora');
    }

    public function delete($id){
        try {
            $hora = Hora::find($id);
            $hora->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
