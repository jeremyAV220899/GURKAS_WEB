@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo">Registrar Tipo Asistencia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos De Tipo Asistencia</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="{{ route('asistencia.store') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Código</label>
                                        <input type="text" id="codigo" name="codigo"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Descripción</label>
                                        <input type="text" id="descripcion" name="descripcion"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Penalidad</label>
                                        <input type="number" id="penalidad" name="penalidad"
                                            class="form-control" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
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
        <div class="breadcrumb-title pe-3">Administrador</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Sistemas</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary btnCrearTipoAsistencia" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar
                    Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lista de Tipo Asistencia</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered bttablaTipoAsistencia">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Penalidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($asistencias as $ids => $asistencia)
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{ $ids + 1 }}</td>
                            <td>{{ $asistencia->codigo }}</td>
                            <td>{{ $asistencia->descripcion }}</td>
                            <td>{{ $asistencia->penalidad }}</td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <button class="btn text-warning btnEditar" type="button"
                                        data-id="{{ $asistencia->id }}" data-bs-toggle="modal"
                                        data-bs-target="#registrar">
                                        <i class="bi bi-pencil-fill">
                                        </i>
                                    </button>
                                    <button class="btn text-danger btnBorrar" title="Eliminar" type="button"
                                        data-id="{{ $asistencia->id }}">
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
@endsection
@section('script')
    <script type="text/javascript">
        $('.btnCrearTipoAsistencia').click(function() {
            let val_url = '/administrador/sistemas/asistencias/guardar';
            $('.titulo').html('Registrar Tipo de Asistencia');
            $('.btnRegistrar').html('Registrar');
            $('#codigo').val('');
            $('#descripcion').val('');
            $('#penalidad').val('');
            $('#formulario').attr('action', val_url);
            $('#registrar').modal('show');
        })

        $('.bttablaTipoAsistencia').on('click', '.btnEditar', function() {
            let val_id = $(this).data('id');
            let val_url = '/administrador/sistemas/asistencias/editar/' + val_id;
            $.get(val_url, function(res) {
                $('.titulo').html('Editar Tipo de Asistencia');
                $('.btnRegistrar').html('Editar');
                $('#codigo').val(res.asistencia.codigo);
                $('#descripcion').val(res.asistencia.descripcion);
                $('#penalidad').val(res.asistencia.penalidad);
                $('#formulario').attr('action', '/administrador/sistemas/asistencias/actualizar/' + val_id);
                $('#registrar').modal('show');
            });
        });

        $('.bttablaTipoAsistencia').on('click', '.btnBorrar', function() {
            let id = $(this).data('id');
            let url = '/administrador/sistemas/asistencias/borrar/' + id;
            $.get(url, function(res) {
                if (res == 'ok') {
                    location.reload();
                } else {
                    toastr.warning('El Tipo de Asistencia esta siendo usado en un registro', 'Error', {
                        "progressBar": true
                    });
                }
            });
        })
    </script>
@endsection
