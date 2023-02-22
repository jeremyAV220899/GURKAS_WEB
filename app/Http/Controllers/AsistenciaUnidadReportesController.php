<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsistenciaUnidadReportesController extends Controller
{
    public function index(){
        return view('recursos-humanos.reportes.asistencia-unidad');
    }
}
