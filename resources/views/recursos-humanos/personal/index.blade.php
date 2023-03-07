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
                                <form id="formulario" class="row g-3" method="POST"  action="{{ route('personal.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-6">
                                        <label class="form-label">Código Empleado</label>
                                        <input type="text" id="cod_empleado" name="cod_empleado" class="form-control"
                                            readonly>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Nombres</label>
                                        <input type="text" id="nombre_empleado" name="nombre_empleado"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Apellido Paterno</label>
                                        <input type="text" id="apellido_paterno" name="apellido_paterno"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Apellido Materno</label>
                                        <input type="text" id="apellido_materno" name="apellido_materno"
                                            class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label for="formFile" class="form-label">Foto</label>
                                        <input class="form-control" id="foto" name="foto" type="file"
                                            id="formFile">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fech. Nacimiento</label>
                                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Sexo</label>
                                        <select class="form-select" id="genero_id" name="genero_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($generos as $genero)
                                                <option value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Tipo Documento</label>
                                        <select class="form-select" id="documento_id" name="documento_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($documentos as $documento)
                                                <option value="{{ $documento->id }}">{{ $documento->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Núm. Documento</label>
                                        <input type="text" id="doc_ident" name="doc_ident" class="form-control">
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
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
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
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($nacionalidades as $nacionalidad)
                                                <option value="{{ $nacionalidad->id }}">{{ $nacionalidad->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Departamento</label>
                                        <select class="form-select" id="departamento"
                                            aria-label="Default select example">
                                            <option value="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Provincia</label>
                                        <select class="form-select" id="provincia" aria-label="Default select example">
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Distrito</label>
                                        <select class="form-select" id="distrito" aria-label="Default select example">
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
                                        <input type="email" id="correo" name="correo" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Horas Laborales</label>
                                        <select class="form-select" id="horas_id" name="horas_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($horas as $hora)
                                                <option value="{{ $hora->id }}">{{ $hora->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Estado Civil</label>
                                        <select class="form-select" id="situaciones_id" name="situaciones_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($situaciones as $situacion)
                                                <option value="{{ $situacion->id }}">{{ $situacion->descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Grado Institución</label>
                                        <select class="form-select" id="grados_id" name="grados_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
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
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($estados as $estado)
                                                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Cargo Laboral</label>
                                        <select class="form-select" id="puesto_id" name="puesto_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($puestos as $puesto)
                                                <option value="{{ $puesto->id }}">{{ $puesto->descripcionPuesto }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Empresa</label>
                                        <select class="form-select" id="empresa_id" name="empresa_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($empresas as $empresa)
                                                <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Tipo Contrato</label>
                                        <select class="form-select" id="contrato_id" name="contrato_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
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
                                    <div class="col-6">
                                        <label class="form-label">Unidad</label>
                                        <select class="form-select" id="unidad_id" name="unidad_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($unidades as $unidad)
                                                <option value="{{ $unidad->id }}">{{ $unidad->razon_social }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Sede</label>
                                        <select class="form-select" id="sede_id" name="sede_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($sedes as $sede)
                                                <option value="{{ $sede->id }}">{{ $sede->nombre_sede }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Turno</label>
                                        <select class="form-select" id="turno_id" name="turno_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($turnos as $turno)
                                                <option value="{{ $turno->id }}">{{ $turno->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Armado</label>
                                        <select class="form-select" id="armado_id" name="armado_id"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
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
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
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
                                            data-bs-dismiss="modal">Cerra</button>
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
                <button type="button" class="btn btn-primary btnCrearPersonal" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar Nuevo</button>
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
                            <table id="tablaPersonal" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 100.641px;">
                                            Cód. Empleado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 30.094px;">Foto</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 190.094px;">Nombres</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 112.406px;">Apellido Paterno</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Apellido Materno</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 84.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personales as $ids => $personal)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title=""
                                                        data-bs-original-title="Views" aria-label="Views"><i
                                                            class="bi bi-eye-fill"></i></a>
                                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title=""
                                                        data-bs-original-title="Edit" aria-label="Edit"><i
                                                            class="bi bi-pencil-fill"></i></a>
                                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title=""
                                                        data-bs-original-title="Delete" aria-label="Delete"><i
                                                            class="bi bi-trash-fill"></i></a>
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
    <script type="text/javascript">
              
    </script>
@endsection

