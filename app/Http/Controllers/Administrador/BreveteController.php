<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Brevete;
use Illuminate\Http\Request;
use Response;

class BreveteController extends Controller
{
    public function index()
    {
        $brevetes = Brevete::all();
        return view('administrador.brevete', compact('brevetes'));
    }

    public function store (Request $request){
        $brevete = new Brevete();
        $brevete->nombre=$request->descripcionBrevete;
        $brevete->save();
        return redirect()->route('administrador.sistemas.brevete');
    }

    public function edit($id){
        $brevete = Brevete::find($id);
        $datos = [
            'brevete' => $brevete,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $brevete = Brevete::find($id);
        $brevete->nombre=$request->descripcionBrevete;
        $brevete->save();
        return redirect()->route('administrador.sistemas.brevete');
    }

    public function delete($id){
        try {
            $brevete = Brevete::find($id);
            $brevete->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
