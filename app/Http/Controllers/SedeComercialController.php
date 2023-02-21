<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SedeComercialController extends Controller
{
    public function index(){
        return view('comercial.sede.index');
    }
}
