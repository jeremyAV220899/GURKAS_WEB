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

    public function store (Request $request){
        $personal = Personal::find($request->hiddenFamiliar);
        if(!empty($personal)){
            $familiar = new Familiar();
            $familiar->nombPersonal=$personal->nombre_completo;
            $familiar->personal_id=$personal->id;
            $familiar->num_hijos=$request->num_hijos;
            $familiar->pareja=$request->pareja;
            $familiar->dniPareja=$request->dniPareja;
            $familiar->save();
        }
        return redirect()->route('personal.familiares');
    }
}
