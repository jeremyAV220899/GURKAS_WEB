<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanillaAfpComisionController extends Controller
{
    public function index(){
        return view('planillas.afp.comision');
    }
}
