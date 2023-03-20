<?php

namespace App\Http\Controllers;

use App\Models\Administrador\Sistema\Estado;
use App\Models\RRHH\Personal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Response;

class UsuarioController extends Controller
{
    public function perfil(){
        return view('usuario.perfil');
    }

    public function index()
    {
        $datos = [
            'usuarios' => User::all(),
            'estados' => Estado::all(),
            'empleados' => Personal::all(),
        ];
        return view('administrador.usuario',$datos);
    }
    public function store (Request $request){
        $usuario = new User();
        $usuario->name=$request->name;
        $usuario->estado_id=$request->estado_id;
        $usuario->email=$request->email;
        $usuario->dni=$request->dni;
        $usuario->password=Hash::make($request->password);
        $usuario->save();
        return redirect()->route('administrador.sistemas.usuario');
    }

    public function edit($id){
        $usuario = User::find($id);
        $datos = [
            'usuario' => $usuario,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $usuario = User::find($id);
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
            $usuario = User::find($id);
            $usuario->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
