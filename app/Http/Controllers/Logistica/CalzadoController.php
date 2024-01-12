<?php

namespace App\Http\Controllers\Logistica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalzadoController extends Controller
{
    public function index(){
        return view('logistica.almacen.producto.calzado');
    }
}
