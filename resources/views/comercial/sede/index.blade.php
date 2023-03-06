@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar Sede</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos De la Sede</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST"  action="{{ route('sede.store') }}">
                                    @csrf
                                    <div class="col-6">
                                        <label class="form-label">Código Sede</label>
                                        <input id="cod_sede" name="cod_sede" type="text" class="form-control" >
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Nombre Sede</label>
                                        <input id="nombre_sede" name="nombre_sede" type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Estado</label>
                                        <select id="estado_id" name="estado_id" class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($estados as $estado)
                                                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Departamento</label>
                                        <select class="form-select" id="departamento" name="departamento" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Provincia</label>
                                        <select class="form-select" id="provincia" name="provincia" aria-label="Default select example">
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Distrito</label>
                                        <select class="form-select" id="distrito" name="distrito" aria-label="Default select example">
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Dirección</label>
                                        <textarea id="direccion" name="direccion"  class="form-control" rows="2" cols="4"></textarea>
                                    </div>
                                    
                                    <div class="col-6">
                                        <label class="form-label">Fech. Activación</label>
                                        <input id="fecha_activacion" name="fecha_activacion" type="date" class="form-control">
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
                                        <input id="centro_costo" name="centro_costo"  type="text" class="form-control">
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Unidad Asignada</h6>
                                    <hr />
                                    <div class="col-12">
                                        <label class="form-label">Unidad</label>
                                        <select  id="cod_unidad" name="cod_unidad" class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            @foreach ($unidades as $unidad)
                                                <option value="{{ $unidad->cod_unidad}}">{{ $unidad->razon_social}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerra</button>
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
                            <table id="tablaSede" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending"
                                        style="width: 157.641px;">
                                        ID</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 157.641px;">
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
                                        <td class="sorting_1">{{ $ids + 1 }}</td>
                                        <td>{{ $sede->cod_sede }}</td>
                                        <td>{{ $sede->nombre_sede }}</td>
                                        <td></td>
                                        <td>{{ $sede->estado->nombre }}</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <button class="btn text-primary btnVer" type="button" data-id="{{ $sede->id }}" data-bs-toggle="modal" data-bs-target="#visualizar">
                                                    <i class="bi bi-eye-fill">
                                                    </i>
                                                </button>
                                                <button class="btn text-warning btnEditar" type="button" data-id="{{ $sede->id }}" data-bs-toggle="modal" data-bs-target="#registrar">
                                                    <i class="bi bi-pencil-fill">
                                                    </i>
                                                </button>
                                                <button class="btn text-danger btnBorrar" title="Eliminar" type="button" data-id="{{ $sede->id }}">
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
    <script src="/js/script.js"></script>
    <script type="text/javascript">
        $('.btnCrearSede').click(function() {
            let val_url = '/comercial/sedes/guardar';
            $('.titulo').html('Registrar Sede');
            $('.btnRegistrar').html('Registrar');
            $('#cod_sede').val('');
            $('#nombre_sede').val('');
            $('#estado_id option:first').prop('selected',true);
            $('#departamento option:first').prop('selected',true);
            $('#provincia option:first').prop('selected',true);
            $('#distrito option:first').prop('selected',true);
            $('#direccion').val('');
            $('#fecha_activacion').val('');
            $('#fecha_baja').val('');       
            $('#longitud').val('');
            $('#latitud').val('');
            $('#contacto').val('');
            $('#correo').val('');
            $('#celular').val('');
            $('#centro_costo').val('');
            $('#cod_unidad option:first').prop('selected',true);
            $('#formulario').attr('action', val_url);
            $('#registrar').modal('show');
        })

        $('#tablaSede').on('click', '.btnEditar', function() {
            let val_id = $(this).data('id');
            let val_url = '/comercial/sedes/editar/' + val_id;
            $.get(val_url, function(res) {
                $('.titulo').html('Editar Sede');
                $('.btnRegistrar').html('Editar');
                $('#cod_sede').val(res.sede.cod_sede);
                $('#nombre_sede').val(res.sede.nombre_sede);
                $('#estado_id').val(res.sede.estado_id);
                $('#departamento').val(res.sede.cod_departamento);
                $('#provincia').val(res.sede.cod_provincia);
                $('#distrito').val(res.sede.cod_distrito);
                $('#direccion').val(res.sede.direccion);
                $('#fecha_activacion').val(res.sede.fecha_activacion);
                $('#fecha_baja').val(res.sede.fecha_baja);
                $('#longitud').val(res.sede.longitud);
                $('#latitud').val(res.sede.latitud);
                $('#contacto').val(res.sede.contacto);
                $('#correo').val(res.sede.celular);
                $('#celular').val(res.sede.correo);
                $('#centro_costo').val(res.sede.centro_costo);
                $('#cod_unidad').val(res.sede.cod_unidad);
                $('#formulario').attr('action', '/comercial/sedes/actualizar/' + val_id);
                $('#registrar').modal('show');
            });
        });

        $('#tablaSede').on('click', '.btnBorrar', function(){
            let id = $(this).data('id');
            let url = '/comercial/sedes/borrar/'+id;
            $.get(url,function(res){
                if(res =='ok'){
                    location.reload();
                }else{
                    toastr.warning('La Unidad esta siendo usado en un registro','Error',{"progressBar": true});
                }
            });
        })
    </script>
@endsection
