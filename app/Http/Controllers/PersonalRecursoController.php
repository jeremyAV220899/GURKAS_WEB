<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class PersonalRecursoController extends Controller
{
    public function index(){
        $dato = [
            'departamentos' => Departamento::all(),
        ];
        return view('recursos-humanos.personal.index', $dato);
    }
}
