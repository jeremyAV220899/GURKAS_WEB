<?php

namespace App\Http\Controllers\RRHH\BusquedaPersonal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    public function index(){
        return view('recursos-humanos.busqueda-personal.unidad');
    }
}
