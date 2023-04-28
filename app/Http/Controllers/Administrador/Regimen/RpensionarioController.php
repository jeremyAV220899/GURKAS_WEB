<?php

namespace App\Http\Controllers\Administrador\Regimen;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Regimen\Afp;
use App\Models\Administrador\Regimen\Comision;
use App\Models\Administrador\Regimen\Movimiento;
use App\Models\Administrador\Regimen\Pensionario;
use App\Models\Administrador\Regimen\Rpensionario;
use Illuminate\Http\Request;

class RpensionarioController extends Controller
{
    public function index(){
        $relaciones = Rpensionario::all();
        $pensionarios = Pensionario::all();
        $movimientos = Movimiento::all();
        $comisiones = Comision::all();
        $afps = Afp::all();
        return view('administrador.regimen-pensionario.relaciones', compact('relaciones', 'pensionarios', 'movimientos', 'comisiones', 'afps'));
    }
    public function store(Request $request){
        $relacion = new Rpensionario;
        $relacion->pensionario_id=$request->pensionario_id;
        $relacion->afp_id=$request->afp_id;
        $relacion->comision_id=$request->comision_id;
        $relacion->movimiento_id=$request->movimiento_id;
        $relacion->save();
        return redirect()->route('administrador.regimen.relacion');
    }
}
