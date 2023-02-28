<?php

namespace App\Http\Controllers\Planilla\AFP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComisionController extends Controller
{
    public function index(){
        return view('planillas.afp.comision');
    }
}
