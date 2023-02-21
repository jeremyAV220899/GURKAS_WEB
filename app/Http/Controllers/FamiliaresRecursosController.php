<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamiliaresRecursosController extends Controller
{
    public function index(){
        return view('recursos-humanos.personal.familiares');
    }
}
