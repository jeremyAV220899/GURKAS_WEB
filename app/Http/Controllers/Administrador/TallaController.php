<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Talla;
use Illuminate\Http\Request;

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

}
