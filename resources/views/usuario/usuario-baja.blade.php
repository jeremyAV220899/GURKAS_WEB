@extends('layouts.apps')
@section('content')
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
    </div>
    <h6 class="mb-0 text-uppercase">Lista de Usuarios de Baja</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered tablaUsuarios">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $ids => $usuario)
                            <tr role="row" class="odd">
                                <td>{{ $usuario->id}}</td>
                                <td>{{ $usuario->name}}</td>
                                <td>{{ $usuario->dni}}</td>
                                <td>{{ $usuario->email}}</td>
                                <td><span class="badge bg-light-{{ Util::estadoUsuariolColor($usuario->estado->id) }} text-{{ Util::estadoUsuariolColor($usuario->estado->id) }} w-100">{{ $usuario->estado->nombre }}</span></td>
                                <td>
                                    <div class="table-actions d-flex align-items-center fs-6">
                                        <a class="btn text-success btnBorrar" title="Recuperar" type="button"
                                            href="{{ route('usuario.recuperar',$usuario->id) }}">
                                            <i class="bi bi-check2-circle">
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
@endsection
@section('script')
    <script src="/js/administrador/usuario.js"></script>
@endsection
