@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos Personales</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="{{ route('personal.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-6">
                                        <label class="form-label">Código Empleado</label>
                                        <input type="text" id="cod_empleado" name="cod_empleado" class="form-control"
                                            readonly>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Nombres</label>
                                        <input type="text" id="nombre_empleado" name="nombre_empleado"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Apellido Paterno</label>
                                        <input type="text" id="apellido_paterno" name="apellido_paterno"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Apellido Materno</label>
                                        <input type="text" id="apellido_materno" name="apellido_materno"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="formFile" class="form-label">Foto</label>
                                        <input class="form-control" id="imagen" name="imagen" type="file"
                                            id="formFile">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fech. Nacimiento</label>
                                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Sexo</label>
                                        <select class="form-select" id="genero_id" name="genero_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($generos as $genero)
                                                <option value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Tipo Documento</label>
                                        <select class="form-select" id="documento_id" name="documento_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($documentos as $documento)
                                                <option value="{{ $documento->id }}">{{ $documento->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Núm. Documento</label>
                                        <input type="text" id="doc_ident" name="doc_ident" class="form-control" required>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fech. Emisión</label>
                                        <input type="date" id="fecha_emision" name="fecha_emision" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fech. Caducación</label>
                                        <input type="date" id="fecha_caducidad" name="fecha_caducidad"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Código Ubigeo</label>
                                        <input type="text" id="cod_ubigeo" name="cod_ubigeo" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Categoría Brevete</label>
                                        <select class="form-select" id="brevete_id" name="brevete_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($brevetes as $brevete)
                                                <option value="{{ $brevete->id }}">{{ $brevete->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Núm. Brevete</label>
                                        <input type="text" id="num_brevete" name="num_brevete" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Nacionalidad</label>
                                        <select class="form-select" id="nacionalidad_id" name="nacionalidad_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($nacionalidades as $nacionalidad)
                                                <option value="{{ $nacionalidad->id }}">{{ $nacionalidad->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Departamento</label>
                                        <select class="form-select" id="departamento" name="departamento"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Provincia</label>
                                        <select class="form-select" id="provincia" name="provincia"
                                            aria-label="Default select example" required>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Distrito</label>
                                        <select class="form-select" id="distrito" name="distrito"
                                            aria-label="Default select example" required>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Dirección</label>
                                        <textarea class="form-control" id="direccion_personal" name="direccion_personal" rows="2" cols="4"></textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Telefono</label>
                                        <input type="text" id="telefono" name="telefono" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Celular</label>
                                        <input type="text" id="celular" name="celular" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Correo</label>
                                        <input type="email" id="correo" name="correo" class="form-control" required>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Horas Laborales</label>
                                        <select class="form-select" id="horas_id" name="horas_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($horas as $hora)
                                                <option value="{{ $hora->id }}">{{ $hora->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Estado Civil</label>
                                        <select class="form-select" id="situaciones_id" name="situaciones_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($situaciones as $situacion)
                                                <option value="{{ $situacion->id }}">{{ $situacion->descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Grado Institución</label>
                                        <select class="form-select" id="grados_id" name="grados_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($grados as $grado)
                                                <option value="{{ $grado->id }}">{{ $grado->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Detalle Contrato</h6>
                                    <hr />
                                    <div class="col-6">
                                        <label class="form-label">Estado</label>
                                        <select class="form-select" id="estado_id" name="estado_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($estados as $estado)
                                                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Cargo Laboral</label>
                                        <select class="form-select" id="puesto_id" name="puesto_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($puestos as $puesto)
                                                <option value="{{ $puesto->id }}" data-cod="{{ $puesto->codigo }}">
                                                    {{ $puesto->descripcionPuesto }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Empresa</label>
                                        <select class="form-select" id="empresa_id" name="empresa_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($empresas as $empresa)
                                                <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Tipo Contrato</label>
                                        <select class="form-select" id="contrato_id" name="contrato_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($contratos as $contrato)
                                                <option value="{{ $contrato->id }}">{{ $contrato->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fecha de Inicio</label>
                                        <input type="date" id="fecha_inicio_contrato" name="fecha_inicio_contrato"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fecha Fin</label>
                                        <input type="date" id="fecha_fin_contrato" name="fecha_fin_contrato"
                                            class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Unidad</label>
                                        <select class="form-select" id="unidad_id" name="unidad_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($unidades as $unidad)
                                                <option value="{{ $unidad->id }}">{{ $unidad->razon_social }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Sede</label>
                                        <select class="form-select" id="sede_id" name="sede_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Turno</label>
                                        <select class="form-select" id="turno_id" name="turno_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($turnos as $turno)
                                                <option value="{{ $turno->id }}">{{ $turno->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Armado</label>
                                        <select class="form-select" id="armado_id" name="armado_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($armados as $armado)
                                                <option value="{{ $armado->id }}">{{ $armado->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Detalle Tallas</h6>
                                    <hr />
                                    <div class="col-6">
                                        <label class="form-label">Talla Camisa</label>
                                        <select class="form-select" id="talla_id" name="talla_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($tallas as $talla)
                                                <option value="{{ $talla->id }}">{{ $talla->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Estatura</label>
                                        <input type="text" id="estatura" name="estatura" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Talla Pantalon</label>
                                        <input type="text" id="talla_pantalon" name="talla_pantalon"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Talla Calzado</label>
                                        <input type="text" id="talla_calzado" name="talla_calzado"
                                            class="form-control">
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Fechas Registros</h6>
                                    <hr />
                                    <div class="col-6">
                                        <label class="form-label">Fecha Inicio Laboral</label>
                                        <input type="date" id="fecha_inicio_laboral" name="fecha_inicio_laboral"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fecha Fin Laboral</label>
                                        <input type="date" id="fecha_fin_laboral" name="fecha_fin_laboral"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fecha de Activación</label>
                                        <input type="date" id="fecha_activacion_laboral"
                                            name="fecha_activacion_laboral" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary btnRegistrar"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal -->

    <!-- Modal VER -->
    <div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Datos completos del personal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos Personales</h6>
                                <hr />
                                <form id="formularioVer" class="row g-3" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-3">
                                        <label class="form-label">Código Empleado</label>
                                        <input type="text" id="cod_empleado_ver" name="cod_empleado_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Nombres</label>
                                        <input type="text" id="nombre_empleado_ver" name="nombre_empleado_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Apellido Paterno</label>
                                        <input type="text" id="apellido_paterno_ver" name="apellido_paterno_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Apellido Materno</label>
                                        <input type="text" id="apellido_materno_ver" name="apellido_materno_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label for="formFile" class="form-label">Foto</label>
                                        <input class="form-control" id="imagen" name="imagen" type="file"
                                            id="formFile">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Fech. Nacimiento</label>
                                        <input type="date" id="fecha_nacimiento_ver" name="fecha_nacimiento_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Sexo</label>
                                        <select class="form-select" id="genero_id_ver" name="genero_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($generos as $genero)
                                                <option value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Tipo Documento</label>
                                        <select class="form-select" id="documento_id_ver" name="documento_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($documentos as $documento)
                                                <option value="{{ $documento->id }}">{{ $documento->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Núm. Documento</label>
                                        <input type="text" id="doc_ident_ver" name="doc_ident_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Fech. Emisión</label>
                                        <input type="date" id="fecha_emision_ver" name="fecha_emision_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Fech. Caducación</label>
                                        <input type="date" id="fecha_caducidad_ver" name="fecha_caducidad_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Código Ubigeo</label>
                                        <input type="text" id="cod_ubigeo_ver" name="cod_ubigeo_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Categoría Brevete</label>
                                        <select class="form-select" id="brevete_id_ver" name="brevete_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($brevetes as $brevete)
                                                <option value="{{ $brevete->id }}">{{ $brevete->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Núm. Brevete</label>
                                        <input type="text" id="num_brevete_ver" name="num_brevete_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Nacionalidad</label>
                                        <select class="form-select" id="nacionalidad_id_ver" name="nacionalidad_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($nacionalidades as $nacionalidad)
                                                <option value="{{ $nacionalidad->id }}">{{ $nacionalidad->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Departamento</label>
                                        <select class="form-select" id="departamento_ver" name="departamento_ver"
                                            aria-label="Default select example" disabled>
                                            <option value="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Provincia</label>
                                        <select class="form-select" id="provincia_ver" name="provincia_ver"
                                            aria-label="Default select example" disabled>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Distrito</label>
                                        <select class="form-select" id="distrito_ver" name="distrito_ver"
                                            aria-label="Default select example" disabled>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Dirección</label>
                                        <textarea class="form-control" id="direccion_personal_ver" name="direccion_personal_ver" rows="2"
                                            cols="4" readonly></textarea>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Telefono</label>
                                        <input type="text" id="telefono_ver" name="telefono_ver" class="form-control"
                                            readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Celular</label>
                                        <input type="text" id="celular_ver" name="celular_ver" class="form-control"
                                            readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Correo</label>
                                        <input type="email" id="correo_ver" name="correo_ver" class="form-control"
                                            readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Horas Laborales</label>
                                        <select class="form-select" id="horas_id_ver" name="horas_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($horas as $hora)
                                                <option value="{{ $hora->id }}">{{ $hora->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Estado Civil</label>
                                        <select class="form-select" id="situaciones_id_ver" name="situaciones_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($situaciones as $situacion)
                                                <option value="{{ $situacion->id }}">{{ $situacion->descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Grado Institución</label>
                                        <select class="form-select" id="grados_id_ver" name="grados_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($grados as $grado)
                                                <option value="{{ $grado->id }}">{{ $grado->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Detalle Contrato</h6>
                                    <hr />
                                    <div class="col-4">
                                        <label class="form-label">Estado</label>
                                        <select class="form-select" id="estado_id_ver" name="estado_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($estados as $estado)
                                                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Cargo Laboral</label>
                                        <select class="form-select" id="puesto_id_ver" name="puesto_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option value="" selected="">--- Seleccionar ---</option>
                                            @foreach ($puestos as $puesto)
                                                <option value="{{ $puesto->id }}" data-cod="{{ $puesto->codigo }}">
                                                    {{ $puesto->descripcionPuesto }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Empresa</label>
                                        <select class="form-select" id="empresa_id_ver" name="empresa_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($empresas as $empresa)
                                                <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Tipo Contrato</label>
                                        <select class="form-select" id="contrato_id_ver" name="contrato_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($contratos as $contrato)
                                                <option value="{{ $contrato->id }}">{{ $contrato->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Fecha de Inicio</label>
                                        <input type="date" id="fecha_inicio_contrato_ver"
                                            name="fecha_inicio_contrato_ver" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Fecha Fin</label>
                                        <input type="date" id="fecha_fin_contrato_ver" name="fecha_fin_contrato_ver"
                                            class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Unidad</label>
                                        <select class="form-select" id="unidad_id_ver" name="unidad_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($unidades as $unidad)
                                                <option value="{{ $unidad->id }}">{{ $unidad->razon_social }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Sede</label>
                                        <select class="form-select" id="sede_id_ver" name="sede_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option value="" selected>--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Turno</label>
                                        <select class="form-select" id="turno_id_ver" name="turno_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected>--- Seleccionar ---</option>
                                            @foreach ($turnos as $turno)
                                                <option value="{{ $turno->id }}">{{ $turno->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Armado</label>
                                        <select class="form-select" id="armado_id_ver" name="armado_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($armados as $armado)
                                                <option value="{{ $armado->id }}">{{ $armado->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Detalle Tallas</h6>
                                    <hr />
                                    <div class="col-3">
                                        <label class="form-label">Talla Camisa</label>
                                        <select class="form-select" id="talla_id_ver" name="talla_id_ver"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($tallas as $talla)
                                                <option value="{{ $talla->id }}">{{ $talla->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Estatura</label>
                                        <input type="text" id="estatura_ver" name="estatura_ver" class="form-control"
                                            readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Talla Pantalon</label>
                                        <input type="text" id="talla_pantalon_ver" name="talla_pantalon_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Talla Calzado</label>
                                        <input type="text" id="talla_calzado_ver" name="talla_calzado_ver"
                                            class="form-control" readonly>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Fechas Registros</h6>
                                    <hr />
                                    <div class="col-4">
                                        <label class="form-label">Fecha Inicio Laboral</label>
                                        <input type="date" id="fecha_inicio_laboral_ver"
                                            name="fecha_inicio_laboral_ver" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Fecha Fin Laboral</label>
                                        <input type="date" id="fecha_fin_laboral_ver" name="fecha_fin_laboral_ver"
                                            class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Fecha de Activación</label>
                                        <input type="date" id="fecha_activacion_laboral_ver"
                                            name="fecha_activacion_laboral_ver" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal -->

    <!-- modal Familia-->
    <div class="modal fade" id="registrarFamilia" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo">Registrar Datos Familiares</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos Del Empleado</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" enctype="multipart/form-data"
                                    action="{{ route('familiar.store') }}">
                                    @csrf
                                    <input type="hidden" id="hiddenFamiliar" name="id">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="CheckPareja">
                                            <label class="form-check-label" for="gridCheck1">
                                                Esposa(o)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="CheckHijos">
                                            <label class="form-check-label" for="gridCheck1">
                                                Hijo
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12" id="hijoGeneral" style="display: none">
                                        <label class="form-label">N° Hijos</label>
                                        <select class="form-select" id="num_hijos" name="num_hijos"
                                            aria-label="Default select example">
                                            <option value="" selected>--- Seleccionar ---</option>
                                            <option value="1">1 Hijo</option>
                                            <option value="2">2 Hijos</option>
                                            <option value="3">3 Hijos</option>
                                            <option value="4">4 Hijos</option>
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Datos Familiares</h6>
                                    <hr />
                                    <div class="col-12 parejaGeneral" style="display: none">
                                        <label for="formFile" class="form-label">DNI Pareja</label>
                                        <input class="form-control" name="imgPareja" type="file" id="formFile">
                                    </div>
                                    <div class="col-6 parejaGeneral" style="display: none">
                                        <label class="form-label">Nombre de Esposa(o)</label>
                                        <input type="text" class="form-control" id="pareja" name="pareja">
                                    </div>
                                    <div class="col-6 parejaGeneral" style="display: none">
                                        <label class="form-label">DNI</label>
                                        <input type="text" class="form-control" id="dniPareja" name="dniPareja">
                                    </div>
                                    <div class="col-12 stiloHijo1" style="display: none">
                                        <label for="formFile" class="form-label">Imagen DNI 1</label>
                                        <input class="form-control" name="img1" type="file" id="formFile">
                                    </div>
                                    <div class="col-6 stiloHijo1" style="display: none">
                                        <label class="form-label">Hijo(a) 1</label>
                                        <input type="text" class="form-control" name="hijo1">
                                    </div>
                                    <div class="col-6 stiloHijo1" style="display: none">
                                        <label class="form-label">DNI 1</label>
                                        <input type="text" class="form-control" name="dni1">
                                    </div>
                                    <div class="col-12 stiloHijo2" style="display: none">
                                        <label for="formFile" class="form-label">Imagen DNI 2</label>
                                        <input class="form-control" name="img2" type="file" id="formFile">
                                    </div>
                                    <div class="col-6 stiloHijo2" style="display: none">
                                        <label class="form-label">Hijo(a) 2</label>
                                        <input type="text" class="form-control" name="hijo2">
                                    </div>
                                    <div class="col-6 stiloHijo2" style="display: none">
                                        <label class="form-label">DNI 2</label>
                                        <input type="text" class="form-control" name="dni2">
                                    </div>
                                    <div class="col-12 stiloHijo3" style="display: none">
                                        <label for="formFile" class="form-label">Imagen DNI 3</label>
                                        <input class="form-control" name="img3" type="file" id="formFile">
                                    </div>
                                    <div class="col-6 stiloHijo3" style="display: none">
                                        <label class="form-label">Hijo(a) 3</label>
                                        <input type="text" class="form-control" name="hijo3">
                                    </div>
                                    <div class="col-6 stiloHijo3" style="display: none">
                                        <label class="form-label">DNI 3</label>
                                        <input type="text" class="form-control" name="dni3">
                                    </div>
                                    <div class="col-12 stiloHijo4" style="display: none">
                                        <label for="formFile" class="form-label">Imagen DNI 4</label>
                                        <input class="form-control" name="img4" type="file" id="formFile">
                                    </div>
                                    <div class="col-6 stiloHijo4" style="display: none">
                                        <label class="form-label">Hijo(a) 4</label>
                                        <input type="text" class="form-control" name="hijo4">
                                    </div>
                                    <div class="col-6 stiloHijo4" style="display: none">
                                        <label class="form-label">DNI 4</label>
                                        <input type="text" class="form-control" name="dni4">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary btnRegistrarFamiliar">Registrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal -->

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Recursos Humanos</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Personal</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary btnCrearPersonal" id="registrarModal"
                    data-bs-toggle="modal" data-bs-target="#registrar">Registrar Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">REGISTRO DE DATOS PERSONALES</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-striped table-bordered dataTable tablaPersonal"
                                role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 80.641px;">
                                            Cód. Empleado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 30.094px;">Foto</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 190.094px;">Nombres y Apellidos</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 190.094px;">Edad</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 70.406px;">Estado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Nacionalidad</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 84.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personales as $ids => $personal)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $personal->cod_empleado }}</td>
                                            <td><a href="{{ Storage::url($personal->imagen) }}" target="_blank"><img src="{{ Storage::url($personal->imagen) }}" alt=""
                                                class="product-img-2"></a></td>
                                            <td>{{ $personal->nombre_completo }}</td>
                                            <td>{{ Util::calcular_edad($personal->fecha_nacimiento) }}</td>
                                            <td><span
                                                    class="badge bg-light-{{ Util::estadoPersonalColor($personal->estado->id) }} text-{{ Util::estadoPersonalColor($personal->estado->id) }} w-100">{{ $personal->estado->nombre }}</span>
                                            </td>
                                            <td>{{ $personal->nacionalidad->nombre }}</td>
                                            <td>
                                                <div class="table-actions d-flex align-items-center fs-6">
                                                    <button type="button" class="btn text-primary btnVer"
                                                        data-id="{{ $personal->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#exampleExtraLargeModal">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </button>
                                                    <button class="btn text-warning btnEditar" type="button"
                                                        data-id="{{ $personal->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#registrar">
                                                        <i class="bi bi-pencil-fill">
                                                        </i>
                                                    </button>
                                                    <button class="btn text-success btnFamiliar" type="button"
                                                        data-id="{{ $personal->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#registrarFamilia" title="Familia">
                                                        <i class="bi bi-person-plus">
                                                        </i>
                                                    </button>
                                                    <button class="btn text-dark btnFamiliar" type="button"
                                                        data-id="{{ $personal->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#registrarFamilia" title="Laborales">
                                                        <i class="bi bi-card-checklist">
                                                        </i>
                                                    </button>
                                                    <a class="btn text-danger btnBorrar" title="Baja" type="button"
                                                        href="{{ route('personal.baja', $personal->id) }}">
                                                        <i class="bi bi-trash-fill">
                                                        </i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/core/function.js"></script>
    <script src="/js/gurkas/RRHH/Personal/personales.js"></script>
    <script type="text/javascript"></script>
@endsection
