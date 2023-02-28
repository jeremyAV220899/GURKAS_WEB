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
    <h6 class="mb-0 text-uppercase">Carga de Datos para el UBIGEO</h6>
    <hr>
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Departamento</h6>
                        <hr>
                        <form class="row g-3" action="{{ route('carga.departamento') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Ingresar Excel</label>
                                <input type="file" class="form-control" name="departamento" id="inputGroupFile02">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Cargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Provincias</h6>
                        <hr>
                        <form class="row g-3" action="{{ route('carga.provincia') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Ingresar Excel</label>
                                <input type="file" class="form-control" name="provincia" id="inputGroupFile02">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Cargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Distritos</h6>
                        <hr>
                        <form class="row g-3" action="{{ route('carga.distrito') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Ingresar Excel</label>
                                <input type="file" class="form-control" name="distrito" id="inputGroupFile02">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Cargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
