@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Asistencia por Sede</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos</h6>
                                <hr/>
                                <form class="row g-3" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Unidad</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Sede</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Desde</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Hasta</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal -->

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Reportes</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Asistencia</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#registrar">Buscar</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Asistencia por Sede</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 157.641px;">
                                            Cód. Empleado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 260.094px;">Nombres</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 112.406px;">DNI</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 104.922px;">F.Nacimiento</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Empresa</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 104.922px;">F.Inicio</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Sede</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Tipo Asistencia</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 104.922px;">F.Asistencia</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Turno</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Puesto</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">AVP71269685</td>
                                        <td>Juan Manuel</td>
                                        <td>712585874</td>
                                        <td>10/06/1996</td>
                                        <td>Grupo Gurkas</td>
                                        <td>06/02/2023</td>
                                        <td>Empresa</td>
                                        <td>Asistencia</td>
                                        <td>22/02/2023</td>
                                        <td>Mañana</td>
                                        <td>Admin</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
