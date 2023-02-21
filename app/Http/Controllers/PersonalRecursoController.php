<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalRecursoController extends Controller
{
    public function index(){
        return view('recursos-humanos.personal.index');
    }
}
