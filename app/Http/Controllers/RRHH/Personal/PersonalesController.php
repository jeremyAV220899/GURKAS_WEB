<?php

namespace App\Http\Controllers\RRHH\Personal;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Armado;
use App\Models\Administrador\Sistema\Brevete;
use App\Models\Administrador\Sistema\Contrato;
use App\Models\Administrador\Sistema\Documento;
use App\Models\Administrador\Sistema\Empresa;
use App\Models\Administrador\Sistema\Estado;
use App\Models\Administrador\Sistema\Genero;
use App\Models\Administrador\Sistema\Grado;
use App\Models\Administrador\Sistema\Hora;
use App\Models\Administrador\Sistema\Nacionalidad;
use App\Models\Administrador\Sistema\Puesto;
use App\Models\Administrador\Sistema\Situacion;
use App\Models\Administrador\Sistema\Talla;
use App\Models\Administrador\Sistema\Turno;
use Illuminate\Http\Request;


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
