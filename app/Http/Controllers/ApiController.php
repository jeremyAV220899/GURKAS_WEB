<?php

namespace App\Http\Controllers;

use App\Models\Administrador\Regimen\Afp;
use App\Models\Administrador\Regimen\Comision;
use App\Models\Administrador\Regimen\Pensionario;
use App\Models\Administrador\Regimen\Rpensionario;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function afp($pensionari){
        $pensionario = Pensionario::where('id',$pensionari)->first();
        $rpensionarios = Rpensionario::where('pensionario_id',$pensionario->id)->select('afp_id')->distinct()->get();
        $html = '';
        foreach ($rpensionarios as $rpensionario) {
            $temp = '<option value="'.$rpensionario->afp->id.'">'.$rpensionario->afp->nombre.'</option>';
            $html = $html . $temp;
        }
        return response()->json($html);
    }

    public function comision($afp){
        $afpTemp = Afp::where('id',$afp)->first();
        $rpensionarios = Rpensionario::where('pensionario_id',$afpTemp->id)->select('comision_id')->distinct()->get();
        $html = '';
        foreach ($rpensionarios as $rpensionario){
            $temp = '<option value="'.$rpensionario->comision->id.'">'.$rpensionario->comision->nombre.'</option>';
            $html = $html . $temp;
        }
        return response()->json($html);
    }

    public function movimiento($comision){
        $comisionTemp = Comision::where('id',$comision)->first();
        $rpensionarios = Rpensionario::where('pensionario_id',$comisionTemp->id)->select('movimiento_id')->distinct()->get();
        $html = '';
        foreach ($rpensionarios as $rpensionario){
            $temp = '<option value="'.$rpensionario->movimiento->id.'">'.$rpensionario->movimiento->nombre.'</option>';
            $html = $html . $temp;
        }
        return response()->json($html);
    }
}
