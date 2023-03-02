<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Sistema\Documento;
use Illuminate\Http\Request;
use Response;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::all();
        return view('administrador.documento', compact('documentos'));
    }

    public function store (Request $request){
        $documento = new Documento();
        $documento->nombre=$request->descripcionDocumento;
        $documento->save();
        return redirect()->route('administrador.sistemas.documento');
    }

    public function edit($id){
        $documento = Documento::find($id);
        $datos = [
            'documento' => $documento,
        ];
        return Response::json($datos);
    }

    public function update ($id, Request $request){
        $documento = Documento::find($id);
        $documento->nombre=$request->descripcionDocumento;
        $documento->save();
        return redirect()->route('administrador.sistemas.documento');
    }

    public function delete($id){
        try {
            $documento = Documento::find($id);
            $documento->delete();
            $response = 'ok';
            return Response::json($response);
        } catch (\Throwable $th) {
            $response = 'error';
            return Response::json($response);
        }
    }
}
