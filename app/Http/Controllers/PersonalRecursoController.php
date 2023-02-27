<?php

namespace App\Http\Controllers;

use App\Models\Brevete;
use App\Models\Documento;
use App\Models\Empresa;
use App\Models\Genero;
use App\Models\Hora;
use App\Models\Nacionalidad;
use App\Models\Talla;
use App\Models\Turno;
use Illuminate\Http\Request;

class PersonalRecursoController extends Controller
{
    public function index(){
        $dato = [
            'generos' => Genero::all(),
            'nacionalidades' => Nacionalidad::all(),
            'documentos' => Documento::all(),
            'brevetes' => Brevete::all(),
            'horas' => Hora::all(),
            'tallas' => Talla::all(),
            'turnos' => Turno::all(),
            'empresas' => Empresa::all(),
        ];
        return view('recursos-humanos.personal.index',$dato);
    }
}
