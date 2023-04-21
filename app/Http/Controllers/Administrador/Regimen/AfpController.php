<?php

namespace App\Http\Controllers\Administrador\Regimen;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Regimen\Afp;
use Illuminate\Http\Request;
use Response;

class AfpController extends Controller
{
    public function index(){
        $afps = Afp::all();
        return view('administrador.regimen-pensionario.afp', compact('afps'));
    }

    public function store (Request $request){
        $afp = new Afp();
        $afp->nombre=$request->nombre;
        $afp->save();
        return redirect()->route('administrador.regimen.afps');
    }

    public function edit($id){
        $afp = Afp::find($id);
        $datos = [
            'afp' => $afp,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $afp = Afp::find($id);
        $afp->nombre=$request->nombre;
        $afp->save();
        return redirect()->route('administrador.regimen.afps');
    }

    public function delete($id){
        try {
            $afp = Afp::find($id);
            $afp->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
