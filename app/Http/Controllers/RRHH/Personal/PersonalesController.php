<?php

namespace App\Http\Controllers\RRHH\Personal;

use App\Http\Controllers\Controller;
use App\Models\Administrador\Regimen\Pensionario;
use App\Models\Administrador\Sistema\Armado;
use App\Models\Administrador\Sistema\Banco;
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
use App\Models\RRHH\Familiar;
use App\Models\RRHH\Personal;
use DateTime;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Response;


class PersonalesController extends Controller
{

    public function indexBaja(){
        set_time_limit(300);
        $datos = [
            'personales' => Personal::where('estado_id','!=','1')->get(),
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
        return view('recursos-humanos.personal.personal-baja',$datos);
    }

    public function index(){
        set_time_limit(300);
        $datos = [
            'personales' => Personal::where('estado_id','!=','2')->get(),
            'generos' => Genero::all(),
            'nacionalidades' => Nacionalidad::all(),
            'documentos' => Documento::all(),
            'bancos' => Banco::all(),
            'pensionarios' => Pensionario::all(),
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
            'unidades' => Unidad::where('estado_id', '!=', '2')->get(),
            'sedes' => Sede::where('estado_id', '!=', '2')->get(),
        ];
        return view('recursos-humanos.personal.index',$datos);
    }

    public function store(Request $request){
        set_time_limit(300);
        $personal = new Personal();
        $imgDefaultF = 'public/img/mujer.jpg';
        $imgDefaultM = 'public/img/hombre.jpg';
        $personal->cod_empleado=$request->cod_empleado;
        $personal->nombre_empleado=$request->nombre_empleado;
        $personal->apellido_paterno=$request->apellido_paterno;
        $personal->apellido_materno=$request->apellido_materno;
        $personal->nombre_completo=$request->apellido_paterno . ' ' . $request->apellido_materno . ' ' . $request->nombre_empleado;
        if (isset($request->imagen)) {
            $personal->imagen=$request->file('imagen')->store('public/img');
        }else if (!isset($request->imagen) && $request->genero_id == '1'){
            $personal->imagen = $imgDefaultM;
        }else if (!isset($request->imagen) && $request->genero_id == '2'){
            $personal->imagen = $imgDefaultF;
        }
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
        $personal->nombre_completo= $request->apellido_paterno . ' ' . $request->apellido_materno . ' ' . $request->nombre_empleado;
        if(isset($request->imagen)){
            if($personal->imagen==null){
                $personal->imagen=$request->file('imagen')->store('public/img');
            }else{
                Storage::delete($personal->imagen);
                $personal->imagen=$request->file('imagen')->store('public/img');
            }
        }
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

    public function baja($id){
        $personal = Personal::find($id);
        
        if($personal->estado_id=='1'){
            $personal->estado_id='2';
        }else{
            $personal->estado_id='1';
        }
        $personal->save();
        return redirect()->route('personal.index');
    }

    public function contador() {
        $personales = Personal::all();
        $contador = count($personales);
        return Response::json($contador);
    }

    public function contadorActivo() {
        $personales = Personal::where('estado_id','!=','2')->get();
        $contador = count($personales);
        return Response::json($contador);
    }

    public function contadorBaja() {
        $personales = Personal::where('estado_id','!=','1')->get();
        $contador = count($personales);
        return Response::json($contador);
    }

    public function recuperar($id){
        $personal = Personal::find($id);
        
        if($personal->estado_id=='2'){
            $personal->estado_id='1';
        }else{
            $personal->estado_id='2';
        }
        $personal->save();
        return redirect()->route('personal.indexBaja');
    }
}
