<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsistenciaPersonalReportesController extends Controller
{
    public function index(){
        return view('recursos-humanos.reportes.asistencia-personal');
    }
}
