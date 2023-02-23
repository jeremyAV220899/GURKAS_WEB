<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaPersonalTurnoController extends Controller
{
    public function index(){
        return view('recursos-humanos.busqueda-personal.turno');
    }
}
