<?php

namespace App\Http\Controllers\RRHH\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamiliaresController extends Controller
{
    public function index(){
        return view('recursos-humanos.personal.familiares');
    }
}
