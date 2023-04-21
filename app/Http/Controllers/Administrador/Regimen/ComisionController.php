<?php

namespace App\Http\Controllers\Administrador\Regimen;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Regimen\Comision;
use Illuminate\Http\Request;
use Response;

class ComisionController extends Controller
{
    public function index(){
        $comisiones = Comision::all();
        return view('administrador.regimen-pensionario.comision', compact('comisiones'));
    }

    public function store (Request $request){
        $comision = new Comision();
        $comision->nombre=$request->nombre;
        $comision->save();
        return redirect()->route('administrador.regimen.comisiones');
    }

    public function edit($id){
        $comision = Comision::find($id);
        $datos = [
            'comision' => $comision,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $comision = Comision::find($id);
        $comision->nombre=$request->nombre;
        $comision->save();
        return redirect()->route('administrador.regimen.comisiones');
    }

    public function delete($id){
        try {
            $comision = Comision::find($id);
            $comision->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
