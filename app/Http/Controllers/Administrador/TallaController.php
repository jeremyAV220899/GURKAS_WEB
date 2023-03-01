<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Talla;
use Illuminate\Http\Request;
use Response;

class TallaController extends Controller
{
    public function index(){
        $tallas = Talla::all();
        return view('administrador.tallas', compact('tallas'));
    }

    public function store (Request $request){
        $talla = new Talla;
        $talla->descripcion=$request->descripcion;
        $talla->save();
        return redirect()->route('administrador.sistemas.talla');
    }

    public function edit($id){
        $talla = Talla::find($id);
        $datos = [
            'talla' => $talla,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $talla = Talla::find($id);
        $talla->descripcion=$request->descripcion;
        $talla->save();
        return redirect()->route('administrador.sistemas.talla');
    }

    public function delete($id){
        try {
            $talla = Talla::find($id);
            $talla->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }

}
