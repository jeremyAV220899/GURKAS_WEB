<?php

namespace App\Http\Controllers\RRHH\Reportes\Asistencia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function index(){
        return view('recursos-humanos.reportes.asistencia-sede');
    }
}
