<?php

namespace App\Http\Controllers\Administrador\Regimen;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Regimen\Movimiento;
use Illuminate\Http\Request;
use Response;

class MovimientoController extends Controller
{
    public function index(){
        $movimientos = Movimiento::all();
        return view('administrador.regimen-pensionario.movimiento', compact('movimientos'));
    }

    public function store (Request $request){
        $movimiento = new Movimiento();
        $movimiento->nombre=$request->nombre;
        $movimiento->save();
        return redirect()->route('administrador.regimen.movimientos');
    }

    public function edit($id){
        $movimiento = Movimiento::find($id);
        $datos = [
            'movimiento' => $movimiento,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $movimiento = Movimiento::find($id);
        $movimiento->nombre=$request->nombre;
        $movimiento->save();
        return redirect()->route('administrador.regimen.movimientos');
    }

    public function delete($id){
        try {
            $movimiento = Movimiento::find($id);
            $movimiento->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
