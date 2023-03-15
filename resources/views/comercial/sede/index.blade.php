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
                                <h6 class="mb-0 text-uppercase">Datos De la Sede</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="{{ route('sede.store') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Nombre Sede</label>
                                        <input id="nombre_sede" name="nombre_sede" type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Estado</label>
                                        <select id="estado_id" name="estado_id" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($estados as $estado)
                                                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Departamento</label>
                                        <select class="form-select" id="departamento" name="departamento"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Provincia</label>
                                        <select class="form-select" id="provincia" name="provincia"
                                            aria-label="Default select example">
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Distrito</label>
                                        <select class="form-select" id="distrito" name="distrito"
                                            aria-label="Default select example">
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Dirección</label>
                                        <textarea id="direccion" name="direccion" class="form-control" rows="2" cols="4"></textarea>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label">Fech. Activación</label>
                                        <input id="fecha_activacion" name="fecha_activacion" type="date"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fech. Baja</label>
                                        <input id="fecha_baja" name="fecha_baja" type="date" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Latitud</label>
                                        <input id="latitud" name="latitud" type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Longitud</label>
                                        <input id="longitud" name="longitud" type="text" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Ubicacion</label>
                                        <textarea id="ubicacion" name="ubicacion" class="form-control" rows="2" cols="4"></textarea>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Representante</h6>
                                    <hr />
                                    <div class="col-6">
                                        <label class="form-label">Contacto</label>
                                        <input id="contacto" name="contacto" type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Correo</label>
                                        <input id="correo" name="correo" type="email" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Celular</label>
                                        <input id="celular" name="celular" type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Centro de Costo</label>
                                        <input id="centro_costo" name="centro_costo" type="text"
                                            class="form-control">
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Unidad Asignada</h6>
                                    <hr />
                                    <div class="col-12">
                                        <label class="form-label">Unidad</label>
                                        <select id="unidad_id" name="unidad_id" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($unidades as $unidad)
                                                <option value="{{ $unidad->id }}">{{ $unidad->razon_social }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerra</button>
                                        <button type="submit" class="btn btn-primary btnRegistrar">Registrar</button>
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

    <!-- modal 2 -->
    <div class="modal fade" id="visualizar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Imformacion de la Sede</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos De la Sede</h6>
                                <hr />
                                <form role="form" class="row g-3">
                                    @csrf
                                    <div class="col-8">
                                        <label class="form-label">Nombre Sede</label>
                                        <input id="nombre_sede_ver" name="nombre_sede_ver" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Estado</label>
                                        <select id="estado_id_ver" name="estado_id_ver" class="form-select"
                                            aria-label="Default select example" disabled="true">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($estados as $estado)
                                                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Departamento</label>
                                        <select class="form-select" id="departamento_ver" name="departamento_ver"
                                            aria-label="Default select example" disabled="true">
                                            <option selected="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Provincia</label>
                                        <select class="form-select" id="provincia_ver" name="provincia_ver"
                                            aria-label="Default select example" disabled="true">
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Distrito</label>
                                        <select class="form-select" id="distrito_ver" name="distrito_ver"
                                            aria-label="Default select example" disabled="true">
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Dirección</label>
                                        <textarea id="direccion_ver" name="direccion_ver" class="form-control" rows="2" cols="4" readonly></textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fech. Activación</label>
                                        <input id="fecha_activacion_ver" name="fecha_activacion_ver" type="date"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fech. Baja</label>
                                        <input id="fecha_baja_ver" name="fecha_baja_ver" type="date"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Latitud</label>
                                        <input id="latitud_ver" name="latitud_ver" type="text" class="form-control"
                                            readonly>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Longitud</label>
                                        <input id="longitud_ver" name="longitud_ver" type="text" class="form-control"
                                            readonly>
                                    </div>
                                    <hr/>
                                    <h6 class="text-uppercase">UNIDAD ASIGNADA</h6>
                                    <div class="col-12">
                                        <label class="form-label">Unidad</label>
                                        <select id="unidad_id_ver" name="unidad_id_ver" class="form-select"
                                            aria-label="Default select example" disabled="true">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($unidades as $unidad)
                                                <option value="{{ $unidad->id }}">{{ $unidad->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <hr/>
                                    <h6 class="text-uppercase">REPRESENTANTE</h6>
                                    <div class="col-12 row g-2">                                        
                                            <div class="col-6">
                                                <label class="form-label">Contacto</label>
                                                <input id="contacto_ver" name="contacto_ver" type="text"
                                                    class="form-control" readonly>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Correo</label>
                                                <input id="correo_ver" name="correo_ver" type="text"
                                                    class="form-control" readonly>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Celular</label>
                                                <input id="celular_ver" name="celular_ver" type="text"
                                                    class="form-control" readonly>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Centro de Costo</label>
                                                <input id="centro_costo_ver" name="centro_costo_ver" type="text"
                                                    class="form-control" readonly>
                                            </div>
                                        
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="gmaps">
                                                        <iframe class="gmaps" id="ubicacion_ver" src=""
                                                            height="450"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        <div class="breadcrumb-title pe-3">Comercial</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Sede</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary btnCrearSede" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lita de Sedes</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-striped table-bordered dataTable tablaSede"
                                role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 80.641px;">
                                            Cód. Sede</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 260.094px;">Nombre Sede</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 112.406px;">Nombre Unidad</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Estado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 84.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sedes as $ids => $sede)
                                        <tr role="row" class="odd">
                                            <td>{{ Util::codigoSede($sede->id) }}</td>
                                            <td>{{ $sede->nombre_sede }}</td>
                                            <td>{{ $sede->unidad->razon_social }}</td>
                                            <td>{{ $sede->estado->nombre }}</td>
                                            <td>
                                                <div class="table-actions d-flex align-items-center fs-6">
                                                    <button class="btn text-success " type="button" title="exportar">
                                                        <i class="bi bi-file-earmark-pdf">
                                                        </i>
                                                    </button>
                                                    <button class="btn text-primary btnVer" type="button"
                                                        data-id="{{ $sede->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#visualizar" title="ver">
                                                        <i class="bi bi-eye-fill">
                                                        </i>
                                                    </button>
                                                    <button class="btn text-warning btnEditar" type="button"
                                                        data-id="{{ $sede->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#registrar" title="editar">
                                                        <i class="bi bi-pencil-fill">
                                                        </i>
                                                    </button>
                                                    <button class="btn text-danger btnBorrar" title="Eliminar"
                                                        type="button" data-id="{{ $sede->id }}" title="elimiar">
                                                        <i class="bi bi-trash-fill">
                                                        </i>
                                                    </button>
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
    <script src="/js/gurkas/comercial/sede.js"></script>
@endsection
