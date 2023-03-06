<?php

namespace App\Http\Controllers\CentroControl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index()
    {

        return view('centro-control.asistencia');
    }
}
