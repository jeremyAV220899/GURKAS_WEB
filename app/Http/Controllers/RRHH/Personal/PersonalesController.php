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
use App\Models\Comercial\Sede;
use App\Models\Comercial\Unidad;
use App\Models\RRHH\Personal;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Response;


class PersonalesController extends Controller
{
    public function index(){
        $datos = [
            'personales' => Personal::all(),
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
            'unidades' => Unidad::all(),
            'sedes' => Sede::all(),
        ];
        return view('recursos-humanos.personal.index',$datos);
    }

    public function store(Request $request){
        $personal = new Personal();
        $personal->cod_empleado=$request->cod_empleado;
        $personal->nombre_empleado=$request->nombre_empleado;
        $personal->apellido_paterno=$request->apellido_paterno;
        $personal->apellido_materno=$request->apellido_materno;
        $personal->nombre_completo=$request->nombre_empleado . ' ' . $request->apellido_paterno . ' ' . $request->apellido_materno;
        if (isset($request->imagen)) {
            $personal->imagen=$request->file('imagen')->store('public/img');
        }
        //$personal->apellido_materno=$request->apellido_materno; EDAD $var1 . $var2;
        $personal->fecha_nacimiento=$request->fecha_nacimiento;
        $personal->genero_id=$request->genero_id;
        $personal->documento_id=$request->documento_id;
        $personal->doc_ident=$request->doc_ident;
        $personal->fecha_emision=$request->fecha_emision;
        $personal->fecha_caducidad=$request->fecha_caducidad;
        $personal->cod_ubigeo=$request->cod_ubigeo;
        $personal->brevete_id=$request->brevete_id;
        $personal->num_brevete=$request->num_brevete;
        $personal->nacionalidad_id=$request->nacionalidad_id;
        $personal->cod_departamento=$request->departamento;
        $personal->cod_provincia=$request->provincia;
        $personal->cod_distrito=$request->distrito;
        $personal->direccion_personal=$request->direccion_personal;
        $personal->telefono=$request->telefono;
        $personal->celular=$request->celular;
        $personal->correo=$request->correo;
        $personal->horas_id=$request->horas_id;
        $personal->situaciones_id=$request->situaciones_id;
        $personal->grados_id=$request->grados_id;
        $personal->estado_id=$request->estado_id;
        $personal->puesto_id=$request->puesto_id;
        $personal->empresa_id=$request->empresa_id;
        $personal->contrato_id=$request->contrato_id;
        $personal->fecha_inicio_contrato=$request->fecha_inicio_contrato;
        $personal->fecha_fin_contrato=$request->fecha_fin_contrato;
        $personal->unidad_id=$request->unidad_id;
        $personal->sede_id=$request->sede_id;
        $personal->turno_id=$request->turno_id;
        $personal->armado_id=$request->armado_id;
        $personal->talla_id=$request->talla_id;
        $personal->estatura=$request->estatura;
        $personal->talla_pantalon=$request->talla_pantalon;
        $personal->talla_calzado=$request->talla_calzado;
        $personal->fecha_inicio_laboral=$request->fecha_inicio_laboral;
        $personal->fecha_fin_laboral=$request->fecha_fin_laboral;
        $personal->fecha_activacion_laboral=$request->fecha_activacion_laboral;
        $personal->save();
        return redirect()->route('personal.index');
    }

    public function ver($id){
        $personal = Personal::find($id);
        $html = $this->getSedesByUnidad($id);
        $datos = [
            'personal' => $personal,
            'html' => $html,
        ];
        return Response::json($datos);
    }

    public function edit($id){
        $personal = Personal::find($id);
        $html = $this->getSedesByUnidad($id);
        $datos = [
            'personal' => $personal,
            'html' => $html,
        ];
        return Response::json($datos);
    }

    public function update($id,Request $request){
        $personal = Personal::find($id);
        $personal->cod_empleado=$request->cod_empleado;
        $personal->nombre_empleado=$request->nombre_empleado;
        $personal->apellido_paterno=$request->apellido_paterno;
        $personal->apellido_materno=$request->apellido_materno;
        $personal->nombre_completo=$request->nombre_empleado . ' ' . $request->apellido_paterno . ' ' . $request->apellido_materno;
        if(isset($request->imagen)){
            if($personal->imagen==null){
                $personal->imagen=$request->file('imagen')->store('public/img');
            }else{
                Storage::delete($personal->imagen);
                $personal->imagen=$request->file('imagen')->store('public/img');
            }
        }
        //$personal->apellido_materno=$request->apellido_materno; EDAD $var1 . $var2;
        $personal->fecha_nacimiento=$request->fecha_nacimiento;
        $personal->genero_id=$request->genero_id;
        $personal->documento_id=$request->documento_id;
        $personal->doc_ident=$request->doc_ident;
        $personal->fecha_emision=$request->fecha_emision;
        $personal->fecha_caducidad=$request->fecha_caducidad;
        $personal->cod_ubigeo=$request->cod_ubigeo;
        $personal->brevete_id=$request->brevete_id;
        $personal->num_brevete=$request->num_brevete;
        $personal->nacionalidad_id=$request->nacionalidad_id;
        $personal->cod_departamento=$request->departamento;
        $personal->cod_provincia=$request->provincia;
        $personal->cod_distrito=$request->distrito;
        $personal->direccion_personal=$request->direccion_personal;
        $personal->telefono=$request->telefono;
        $personal->celular=$request->celular;
        $personal->correo=$request->correo;
        $personal->horas_id=$request->horas_id;
        $personal->situaciones_id=$request->situaciones_id;
        $personal->grados_id=$request->grados_id;
        $personal->estado_id=$request->estado_id;
        $personal->puesto_id=$request->puesto_id;
        $personal->empresa_id=$request->empresa_id;
        $personal->contrato_id=$request->contrato_id;
        $personal->fecha_inicio_contrato=$request->fecha_inicio_contrato;
        $personal->fecha_fin_contrato=$request->fecha_fin_contrato;
        $personal->unidad_id=$request->unidad_id;
        $personal->sede_id=$request->sede_id;
        $personal->turno_id=$request->turno_id;
        $personal->armado_id=$request->armado_id;
        $personal->talla_id=$request->talla_id;
        $personal->estatura=$request->estatura;
        $personal->talla_pantalon=$request->talla_pantalon;
        $personal->talla_calzado=$request->talla_calzado;
        $personal->fecha_inicio_laboral=$request->fecha_inicio_laboral;
        $personal->fecha_fin_laboral=$request->fecha_fin_laboral;
        $personal->fecha_activacion_laboral=$request->fecha_activacion_laboral;
        $personal->save();
        return redirect()->route('personal.index');
    }

    public function getSedesByUnidad($id){
        $personal = Personal::find($id);
        $sedes = Sede::where('unidad_id', $personal->unidad_id)->get();
        $html='<option value="">----- Seleccionar -----</option>';
        foreach ($sedes as $sede) {
            if($sede->id == $personal->sede_id){
                $cadena = '<option value="'.$sede->id.'" selected>'.$sede->nombre_sede.'</option>';
            }else{
                $cadena = '<option value="'.$sede->id.'">'.$sede->nombre_sede.'</option>';
            }
            $html .= $cadena;
        }
        return $html;
    }
}
