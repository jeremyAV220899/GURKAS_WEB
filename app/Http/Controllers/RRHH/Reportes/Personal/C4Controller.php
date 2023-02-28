<?php

namespace App\Http\Controllers\RRHH\Reportes\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C4Controller extends Controller
{
    public function index(){
        return view('recursos-humanos.reportes.C4');
    }
}
