<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Ubigeo\Departamento;
use App\Models\Administrador\Sistema\Ubigeo\Distrito;
use App\Models\Administrador\Sistema\Ubigeo\Provincia;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Response;

class SistemaController extends Controller
{
    public function index()
    {
        return view('administrador.ubigeo');
    }

    public function departamentoImportExcel(Request $request)
    {
        $archivo = $request->file('departamento');
        if (!empty($archivo)) {
            $spreadsheet = IOFactory::load($archivo->getRealPath());
            $worksheet = $spreadsheet->getActiveSheet();
            $rows = $worksheet->toArray();
            $departamentos = [];
            foreach ($rows as $key => $value) {
                if ($key > 0) {
                    foreach ($value as $iter => $column_value) {
                        switch ($iter) {
                            case 0:
                                $codigo = $column_value;
                                break;
                            case 1:
                                $nombre = $column_value;
                                break;
                        }
                    };
                    $departamentos[] = [
                        'codigo' => $codigo,
                        'nombre' => $nombre
                    ];
                }
            }
            Departamento::insert($departamentos);
        }
        return redirect()->route('administrador.sistemas.ubigeo');
    }

    public function provinciaImportExcel(Request $request)
    {
        $archivo = $request->file('provincia');
        if (!empty($archivo)) {
            $spreadsheet = IOFactory::load($archivo->getRealPath());
            $worksheet = $spreadsheet->getActiveSheet();
            $rows = $worksheet->toArray();
            $provincias = [];
            foreach ($rows as $key => $value) {
                if ($key > 0) {
                    foreach ($value as $iter => $column_value) {
                        switch ($iter) {
                            case 0:
                                $codigo = $column_value;
                                break;
                            case 1:
                                $nombre = $column_value;
                                break;
                        }
                    };
                    $provincias[] = [
                        'codigo' => $codigo,
                        'nombre' => $nombre
                    ];
                }
            }
            Provincia::insert($provincias);
        }
        return redirect()->route('administrador.sistemas.ubigeo');
    }

    public function distritoImportExcel(Request $request)
    {
        $archivo = $request->file('distrito');
        if (!empty($archivo)) {
            $spreadsheet = IOFactory::load($archivo->getRealPath());
            $worksheet = $spreadsheet->getActiveSheet();
            $rows = $worksheet->toArray();
            $distritos = [];
            foreach ($rows as $key => $value) {
                if ($key > 0) {
                    foreach ($value as $iter => $column_value) {
                        switch ($iter) {
                            case 0:
                                $codigo = $column_value;
                                break;
                            case 1:
                                $nombre = $column_value;
                                break;
                        }
                    };
                    $distritos[] = [
                        'codigo' => $codigo,
                        'nombre' => $nombre
                    ];
                }
            }
            Distrito::insert($distritos);
        }
        return redirect()->route('administrador.sistemas.ubigeo');
    }

    public function listaDepartamentos(){
        $departamentos = Departamento::all();
        return Response::json($departamentos);
    }

    public function listaProvincias($codigo){
        $provincias = Provincia::where('codigo','like',$codigo.'%')->get();
        return Response::json($provincias);
    }

    public function listaDistritos($codigo){
        $distritos = Distrito::where('codigo','like',$codigo.'%')->get();
        return Response::json($distritos);
    }

    public function seleccionarUbigeo(Request $request){
        $dep = $request->departamento;
        $prov = $request->provincia;
        $dist = $request->distrito;
        $ubigeo = $request->ubigeo;
        $htmlDep = '<option value="">--- Seleccionar ---</option>';
        $htmlProv = '<option value="">--- Seleccionar ---</option>';
        $htmlDist = '<option value="">--- Seleccionar ---</option>';

        $ubigeoDep = substr($ubigeo,0,-4);
        $ubigeoProv = substr($ubigeo,0,-2);
        $ubigeoDist = $ubigeo;

        $departamentos = Departamento::all();
        foreach ($departamentos as $departamento){
            if ($departamento->codigo == $ubigeoDep ){
                $htmlDep .= '<option value="'.$departamento->codigo.'" selected>'.$departamento->nombre.'</option>';
            }else{
                $htmlDep .= '<option value="'.$departamento->codigo.'"  >'.$departamento->nombre.'</option>';
            }
        }

        $provincias = Provincia::where('codigo','like',$ubigeoDep.'%')->get();
        foreach ($provincias as $provincia){
            if ($provincia->codigo == $ubigeoProv ){
                $htmlProv .= "<option value='".$provincia->codigo."' selected>".$provincia->nombre."</option>";
            }else{
                $htmlProv .= "<option value='".$provincia->codigo."' >".$provincia->nombre."</option>";
            }
        }

        $distritos = Distrito::where('codigo','like',$ubigeoProv.'%')->get();
        foreach ($distritos as $distrito){
            if ($distrito->codigo == $ubigeoDist ){
                $htmlDist .= "<option value='".$distrito->codigo."' selected>".$distrito->nombre."</option>";
            }else{
                $htmlDist .= "<option value='".$distrito->codigo."' >".$distrito->nombre."</option>";
            }
        }

        $response = [
            'dep' => $dep,
            'prov' => $prov,
            'dist' => $dist,
            'htmlDep' => $htmlDep,
            'htmlProv' => $htmlProv,
            'htmlDist' => $htmlDist,
            'ubigeo' => $ubigeo

        ];
        return Response::json($response);
    }
}
