@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo">Registrar Puesto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos Del Puesto</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="{{ route('puesto.store') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Codigo</label>
                                        <input type="text" id="codigo" name="codigo" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Descripción</label>
                                        <input type="text" id="descripcionPuesto" name="descripcionPuesto" class="form-control"
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
                <button type="button" class="btn btn-primary btnCrearPuesto" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar
                    Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lita de Puesto</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="tablaPuestos" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 50.641px;">
                                            ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 50.094px;">Codigo de Puesto</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 50.094px;">Puesto</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 50.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($puestos as $ids => $puesto)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $ids + 1 }}</td>
                                        <td>{{ $puesto->codigo }}</td>
                                        <td>{{ $puesto->descripcionPuesto }}</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <button class="btn text-warning btnEditar" type="button" data-id="{{ $puesto->id }}" data-bs-toggle="modal" data-bs-target="#registrar">
                                                    <i class="bi bi-pencil-fill">
                                                    </i>
                                                </button>
                                                <button class="btn text-danger btnBorrar" title="Eliminar" type="button" data-id="{{ $puesto->id }}">
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
        $('.btnCrearPuesto').click(function() {
            let val_url = '/administrador/sistemas/puestos/guardar';
            $('.titulo').html('Registrar Puesto');
            $('.btnRegistrar').html('Registrar');
            $('#descripcionPuesto').val('');
            $('#codigo').val('');
            $('#formulario').attr('action', val_url);
            $('#registrar').modal('show');
        })

        $('#tablaPuestos').on('click', '.btnEditar', function() {
            let val_id = $(this).data('id');
            let val_url = '/administrador/sistemas/puestos/editar/' + val_id;
            $.get(val_url, function(res) {
                $('.titulo').html('Editar Puesto');
                $('.btnRegistrar').html('Editar');
                $('#descripcionPuesto').val(res.puesto.descripcionPuesto);
                $('#codigo').val(res.puesto.codigo);
                $('#formulario').attr('action', '/administrador/sistemas/puestos/actualizar/' + val_id);
                $('#registrar').modal('show');
            });
        });

        $('#tablaPuestos').on('click', '.btnBorrar', function(){
            let id = $(this).data('id');
            let url = '/administrador/sistemas/puestos/borrar/'+id;
            $.get(url,function(res){
              if(res =='ok'){
                location.reload();
              }else{
                toastr.warning('El Puesto esta siendo usado en un registro','Error',{"progressBar": true});
              }
            });
        })
    </script>
@endsection
