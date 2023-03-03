@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo">Registrar Armado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos de Armado</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="{{ route('armado.store') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Descripción</label>
                                        <input type="text" id="descripcion" name="descripcion" class="form-control"
                                            required>
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
                <button type="button" class="btn btn-primary btnCrearArmado" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar
                    Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lita de Estado Armado</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="tablaArmado" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 50.641px;">
                                            ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 50.094px;">Estado Armado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 50.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($armados as $ids => $armado)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $ids + 1 }}</td>
                                            <td>{{ $armado->descripcion }}</td>
                                            <td>
                                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                    <button class="btn text-warning btnEditar" type="button" data-id="{{ $armado->id }}" data-bs-toggle="modal" data-bs-target="#registrar">
                                                        <i class="bi bi-pencil-fill">
                                                        </i>
                                                    </button>
                                                    <button class="btn text-danger btnBorrar" title="Eliminar" type="button" data-id="{{ $armado->id }}">
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
    <script type="text/javascript">
        $('.btnCrearArmado').click(function() {
            let val_url = '/administrador/sistemas/armados/guardar';
            $('.titulo').html('Registrar Estado Armado');
            $('.btnRegistrar').html('Registrar');
            $('#descripcion').val('');
            $('#formulario').attr('action', val_url);
            $('#registrar').modal('show');
        })

        $('#tablaArmado').on('click', '.btnEditar', function() {
            let val_id = $(this).data('id');
            let val_url = '/administrador/sistemas/armados/editar/' + val_id;
            $.get(val_url, function(res) {
                $('.titulo').html('Editar Estado Armado');
                $('.btnRegistrar').html('Editar');
                $('#descripcion').val(res.armado.descripcion);
                $('#formulario').attr('action', '/administrador/sistemas/armados/actualizar/' + val_id);
                $('#registrar').modal('show');
            });
        });

        $('#tablaArmado').on('click', '.btnBorrar', function(){
            let id = $(this).data('id');
            let url = '/administrador/sistemas/armados/borrar/'+id;
            $.get(url,function(res){
              if(res =='ok'){
                location.reload();
              }else{
                toastr.warning('El Estado esta siendo usado en un registro','Error',{"progressBar": true});
              }
            });
        })
    </script>
@endsection
