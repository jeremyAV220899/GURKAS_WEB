<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Estado;
use App\Models\Administrador\Sistema\Usuario;
use App\Models\RRHH\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Response;

class UsuarioController extends Controller
{
    public function index()
    {
       
        $datos = [
            'usuarios' => Usuario::all(),
            'estados' => Estado::all(),
            'empleados' => Personal::all(),
        ];
        return view('administrador.usuario',$datos);
    }
    public function store (Request $request){
        $usuario = new Usuario();
        $usuario->dni=$request->dni;
        $usuario->name=$request->name;
        $usuario->idestado=$request->idestado;
        $usuario->email=$request->email;
        $usuario->password=Hash::make($request->password);
        $usuario->save();
        return redirect()->route('administrador.sistemas.usuario');
    }

    public function edit($id){
        $usuario = Usuario::find($id);
        $datos = [
            'usuario' => $usuario,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $usuario = Usuario::find($id);
        $usuario->dni=$request->dni;
        $usuario->name=$request->name;
        $usuario->idestado=$request->idestado;
        $usuario->email=$request->email;
        $usuario->password=Hash::make($request->password);
        $usuario->save();
        return redirect()->route('administrador.sistemas.usuario');
    }

    public function delete($id){
        try {
            $usuario = Usuario::find($id);
            $usuario->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
