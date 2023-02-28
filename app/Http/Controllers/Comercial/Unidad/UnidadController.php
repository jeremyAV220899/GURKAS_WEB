<?php

namespace App\Http\Controllers\Comercial\Unidad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    public function index(){
        return view('comercial.unidad.index');
    }
}
