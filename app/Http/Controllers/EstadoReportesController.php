<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadoReportesController extends Controller
{
    public function index(){
        return view('recursos-humanos.reportes.estado');
    }
}
