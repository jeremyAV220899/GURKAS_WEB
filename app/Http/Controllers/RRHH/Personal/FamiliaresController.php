<?php

namespace App\Http\Controllers\RRHH\Personal;

use App\Http\Controllers\Controller;
use App\Models\RRHH\Familiar;
use App\Models\RRHH\Personal;
use Illuminate\Http\Request;
use Response;

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

    public function familia($id){
        $personal = Personal::find($id);
        return Response::json($personal);
    }

    public function store (Request $request){
        $familiar = new Familiar;
        $familiar->personal_id=$request->id;
        $familiar->num_hijos=$request->num_hijos;
        $familiar->pareja=$request->pareja;
        $familiar->dniPareja=$request->dniPareja;
        $familiar->imgPareja=$request->imgPareja;
        $familiar->imgDni1=$request->img1;
        $familiar->dnihijo1=$request->dni1;
        $familiar->hijo1=$request->hijo1;
        $familiar->imgDni2=$request->img2;
        $familiar->dnihijo2=$request->dni2;
        $familiar->hijo2=$request->hijo2;
        $familiar->imgDni3=$request->img3;
        $familiar->dnihijo3=$request->dni3;
        $familiar->hijo3=$request->hijo3;
        $familiar->imgDni4=$request->img4;
        $familiar->dnihijo4=$request->dni4;
        $familiar->hijo4=$request->hijo4;
        $familiar->save();
        return redirect()->route('personal.index');
    }
}
