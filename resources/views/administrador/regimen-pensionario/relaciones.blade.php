@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo">Registrar afp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos AFP</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Pensionario</label>
                                        <select class="form-select" id="pensionario_id" name="pensionario_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($pensionarios as $pensionario)
                                                <option value="{{ $pensionario->id }}">{{ $pensionario->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">AFP / ONP</label>
                                        <select class="form-select" id="afp_id" name="afp_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($afps as $afp)
                                                <option value="{{ $afp->id }}">{{ $afp->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Tipo de Comisión</label>
                                        <select class="form-select" id="comision_id" name="comision_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($comisiones as $comision)
                                                <option value="{{ $comision->id }}">{{ $comision->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Movimiento</label>
                                        <select class="form-select" id="movimiento_id" name="movimiento_id"
                                            aria-label="Default select example" required>
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($movimientos as $movimiento)
                                                <option value="{{ $movimiento->id }}">{{ $movimiento->nombre }}</option>
                                            @endforeach
                                        </select>
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
                    <li class="breadcrumb-item active" aria-current="page">Regimen</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary btnCrearAfp" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar
                    Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lista de AFP</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered bttablaAfp">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pensionario</th>
                            <th>AFP</th>
                            <th>Comisión</th>
                            <th>Movimiento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($relaciones as $ids => $relacion)
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{ $ids + 1 }}</td>
                            <td>{{ $relacion->pensionario->nombre }}</td>
                            <td>{{ $relacion->afp->nombre }}</td>
                            <td>{{ $relacion->comision->nombre }}</td>
                            <td>{{ $relacion->movimiento->nombre }}</td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <button class="btn text-warning btnEditar" type="button"
                                        data-id="#" data-bs-toggle="modal"
                                        data-bs-target="#registrar">
                                        <i class="bi bi-pencil-fill">
                                        </i>
                                    </button>
                                    <button class="btn text-danger btnBorrar" title="Eliminar" type="button"
                                        data-id="#">
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
        $('.btnCrearAfp').click(function() {
            let val_url = '/administrador/regimen/relacion/guardar';
            $('.titulo').html('Registrar Relacion');
            $('.btnRegistrar').html('Registrar');
            $('#nombre').val('');
            $('#formulario').attr('action', val_url);
            $('#registrar').modal('show');
        })

        $('.bttablaAfp').on('click', '.btnEditar', function() {
            let val_id = $(this).data('id');
            let val_url = '/administrador/regimen/afp/editar/' + val_id;
            $.get(val_url, function(res) {
                $('.titulo').html('Editar Afp');
                $('.btnRegistrar').html('Editar');
                $('#nombre').val(res.afp.nombre);
                $('#formulario').attr('action', '/administrador/regimen/afp/actualizar/' + val_id);
                $('#registrar').modal('show');
            });
        });

        $('.bttablaAfp').on('click', '.btnBorrar', function() {
            let id = $(this).data('id');
            let url = '/administrador/regimen/afp/borrar/' + id;
            $.get(url, function(res) {
                if (res == 'ok') {
                    location.reload();
                } else {
                    toastr.warning('Esta AFP esta siendo usado en un registro', 'Error', {
                        "progressBar": true
                    });
                }
            });
        })
    </script>
@endsection
