@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo">Registrar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos de la Cuenta de Usuario</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="{{ route('usuario.store') }}">
                                    @csrf
                                    <div class="col-12">
                                        <input type="hidden" value="" id="hiddenUsuario">
                                        <label class="form-label">Buscar Personal</label>
                                        <select class="single-select select2" id="personal_id" name="personal_id">                   
                                            <option value="" selected>----Seleccionar----</option>
                                            @foreach ($empleados as $empleado )
                                                <option value="{{ $empleado->id }}">{{ $empleado->nombre_completo }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Estado del Usuario</label>
                                        <select id="estado_id" name="estado_id" class="form-select"
                                            aria-label="Default select example">
                                            <option value="" selected>--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Correo</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Contraseña</label>
                                        <input type="text" id="clave" name="clave" class="form-control" required>
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
                <button type="button" class="btn btn-primary btnCrearEmpresa" id="registrarModal" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar
                    Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lita de Usuarios</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered tablaSituaciones">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $ids => $usuario)
                            <tr role="row" class="odd">
                                <td>{{ $usuario->id}}</td>
                                <td>{{ $usuario->name}}</td>
                                <td>{{ $usuario->estado->nombre}}</td>
                                <td>{{ $usuario->email}}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center fs-6">
                                        <button class="btn text-warning btnEditar" type="button"
                                            data-id="{{ $usuario->id }}" data-bs-toggle="modal"
                                            data-bs-target="#registrar">
                                            <i class="bi bi-pencil-fill">
                                            </i>
                                        </button>
                                        <button class="btn text-danger btnBorrar" title="Eliminar" type="button"
                                            data-id="{{ $usuario->id }}">
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
    <script src="/js/administrador/usuario.js"></script>
@endsection
