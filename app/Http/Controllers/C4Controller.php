<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C4Controller extends Controller
{
    public function index(){
        return view('recursos-humanos.reportes.C4');
    }
}
