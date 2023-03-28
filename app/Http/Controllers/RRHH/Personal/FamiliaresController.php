<?php

namespace App\Http\Controllers\RRHH\Personal;

use App\Http\Controllers\Controller;
use App\Models\RRHH\Familiar;
use App\Models\RRHH\Personal;
use Illuminate\Http\Request;

class FamiliaresController extends Controller
{
    public function index()
    {
        $datos = [
            'familiares' => Familiar::all(),
            'empleados' => Personal::all(),
        ];
        return view('recursos-humanos.personal.familiares', $datos);
    }
}
