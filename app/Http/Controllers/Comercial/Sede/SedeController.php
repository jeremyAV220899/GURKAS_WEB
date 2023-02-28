<?php

namespace App\Http\Controllers\Comercial\Sede;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function index(){
        return view('comercial.sede.index');
    }
}
