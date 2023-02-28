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
}
