<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboralesRecursosController extends Controller
{
    public function index(){
        return view('recursos-humanos.personal.laborales');
    }
}
