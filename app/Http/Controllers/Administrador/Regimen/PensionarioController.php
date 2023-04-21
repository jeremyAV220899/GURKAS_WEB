<?php

namespace App\Http\Controllers\Administrador\Regimen;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Regimen\Pensionario;
use Illuminate\Http\Request;
use Response;

class PensionarioController extends Controller
{
    public function index(){
        $pensionarios = Pensionario::all();
        return view('administrador.regimen-pensionario.pensionario', compact('pensionarios'));
    }

    public function store (Request $request){
        $pensionario = new Pensionario();
        $pensionario->nombre=$request->nombre;
        $pensionario->save();
        return redirect()->route('administrador.regimen.pensionarios');
    }

    public function edit($id){
        $pensionario = Pensionario::find($id);
        $datos = [
            'pensionario' => $pensionario,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $pensionario = Pensionario::find($id);
        $pensionario->nombre=$request->nombre;
        $pensionario->save();
        return redirect()->route('administrador.regimen.pensionarios');
    }

    public function delete($id){
        try {
            $pensionario = Pensionario::find($id);
            $pensionario->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
