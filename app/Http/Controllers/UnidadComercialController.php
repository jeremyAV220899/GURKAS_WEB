<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnidadComercialController extends Controller
{
    public function index(){
        return view('comercial.unidad.index');
    }
}
