<?php

namespace App\Http\Controllers\RRHH\BusquedaPersonal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function index(){
        return view('recursos-humanos.busqueda-personal.sede');
    }
}
