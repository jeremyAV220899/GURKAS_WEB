<?php

namespace App\Http\Controllers\RRHH\Personal;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Armado;
use App\Models\Administrador\Sistema\Contrato;
use App\Models\Administrador\Sistema\Estado;
use App\Models\Administrador\Sistema\Grado;
use App\Models\Administrador\Sistema\Puesto;
use App\Models\Administrador\Sistema\Situacion;
use App\Models\Administrador\Sistema\Talla;
use Illuminate\Http\Request;
use App\Models\Brevete;
use App\Models\Documento;
use App\Models\Empresa;
use App\Models\Genero;
use App\Models\Hora;
use App\Models\Nacionalidad;

use App\Models\Turno;

class PersonalesController extends Controller
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
            'puestos' => Puesto::all(),
            'estados' => Estado::all(),
            'grados' => Grado::all(),
            'situaciones' => Situacion::all(),
            'contratos' => Contrato::all(),
            'armados' => Armado::all(),
        ];
        return view('recursos-humanos.personal.index',$dato);
    }
}
