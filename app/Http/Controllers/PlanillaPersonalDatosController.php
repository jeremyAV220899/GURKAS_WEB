<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanillaPersonalDatosController extends Controller
{
    public function index(){
        return view('planillas.personal.datos');
    }
}
