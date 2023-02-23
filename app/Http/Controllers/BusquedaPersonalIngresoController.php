<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaPersonalIngresoController extends Controller
{
    public function index(){
        return view('recursos-humanos.busqueda-personal.ingreso');
    }
}
