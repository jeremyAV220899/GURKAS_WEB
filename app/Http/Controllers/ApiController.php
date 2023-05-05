<?php

namespace App\Http\Controllers;

use App\Models\Administrador\Regimen\Afp;
use App\Models\Administrador\Regimen\Comision;
use App\Models\Administrador\Regimen\Movimiento;
use App\Models\Administrador\Regimen\Pensionario;
use App\Models\Administrador\Regimen\Rpensionario;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function afp($id){
        $pensionarios = Rpensionario::where('pensionario_id', $id)->get();
        $cantidad = count($pensionarios);
        $estado = true;
        $afpHtml = "";
        $comisionHtml = "";
        $movimientoHtml = "";
        if($cantidad == 1){
            $afp = Afp::find($pensionarios[0]->afp_id);
            $comision = Comision::find($pensionarios[0]->comision_id);
            $movimiento = Movimiento::find($pensionarios[0]->movimiento_id);
            $afpHtml = '<option value="'.$afp->id.'">'.$afp->nombre.'</option>';
            $comisionHtml = '<option value="'.$comision->id.'">'.$comision->nombre.'</option>';
            $movimientoHtml = '<option value="'.$movimiento->id.'">'.$movimiento->nombre.'</option>';
            $afpcuspp = $afp->nombre;
        }else{
            $idAfps = [];
            $idComisiones = [];
            $idMovimientos = [];
            foreach($pensionarios as $pensionario){
                if (!in_array($pensionario->afp_id, $idAfps)) {
                    array_push($idAfps, $pensionario->afp_id);
                }
                if (!in_array($pensionario->comision_id, $idComisiones)) {
                    array_push($idComisiones, $pensionario->comision_id);
                }
                if (!in_array($pensionario->movimiento_id, $idMovimientos)) {
                    array_push($idMovimientos, $pensionario->movimiento_id);
                }
            }
            for ($i=0; $i < count($idAfps); $i++) { 
                $afp = Afp::find($idAfps[$i]);
                $cadena = '<option value="'.$afp->id.'">'.$afp->nombre.'</option>';
                $afpHtml .= $cadena;
            }

            for ($i=0; $i <count($idComisiones) ; $i++) { 
                $comision = Comision::find($idComisiones[$i]);
                $cadena = '<option value="'.$comision->id.'">'.$comision->nombre.'</option>';
                $comisionHtml .= $cadena;
            }

            for ($i=0; $i <count($idMovimientos) ; $i++) { 
                $movimiento = Movimiento::find($idMovimientos[$i]);
                $cadena = '<option value="'.$movimiento->id.'">'.$movimiento->nombre.'</option>';
                $movimientoHtml .= $cadena;
            }
            $afpcuspp = '';
            $estado = false;
        }
        $html = [
            'afp' => $afpHtml,
            'comision' => $comisionHtml,
            'movimiento' => $movimientoHtml,
            'estado' => $estado,
            'afpcuspp' => $afpcuspp
        ];
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
