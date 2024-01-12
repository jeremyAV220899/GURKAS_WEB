<?php

namespace App\Http\Controllers\Logistica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PantalonController extends Controller
{
    public function index(){
        return view('logistica.almacen.producto.pantalon');
    }
}
