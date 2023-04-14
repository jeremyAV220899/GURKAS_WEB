<?php

namespace App\Http\Controllers\RRHH\Personal;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Banco;
use App\Models\RRHH\Laboral;
use Illuminate\Http\Request;

class LaboralesController extends Controller
{
    public function index(){
        $datos = [
            'laborales' => Laboral::all(),
            'bancos' => Banco::all(),
        ];
        return view('recursos-humanos.personal.laborales',$datos);
    }
}