@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actuaizar Comisión AFP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Comisión AFP</h6>
                                <hr/>
                                <form class="row g-3" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">AFP</label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Tipo Comisión</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">MIXTA</option>
                                            <option value="E">FLUJO</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Comisión Sobre Flujo</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Prima de Seguro(%)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Aporte Obligatorio al Fondo de Pensiones</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Remuneración Máxima Asegurable</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Comisión Anual Sobre Saldo</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal -->

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Planillas</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Actualizar Comisión AFP</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#registrar">Actualizar Comisión</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Comisión ACTUAL DE AFP</h6>
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
                                            aria-label="Name: activate to sort column descending" style="width: 100.641px;">
                                            ID AFP</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 200.094px;">AFP</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 112.406px;">PS AFP</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">AOFP AFP</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">RMA AFP</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 84.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>SPP INTEGRA</td>
                                        <td>0.0184</td>
                                        <td>0.10</td>
                                        <td>11426.35</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">2</td>
                                        <td>SPP HORIZONTE</td>
                                        <td>0.0000</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">3</td>
                                        <td>SPP PROFUTURO</td>
                                        <td>0.0184</td>
                                        <td>0.10</td>
                                        <td>11426.35</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">4</td>
                                        <td>SPP PRIMA</td>
                                        <td>0.0184</td>
                                        <td>0.10</td>
                                        <td>11426.35</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">5</td>
                                        <td>SPP HABITAT</td>
                                        <td>0.0184</td>
                                        <td>0.10</td>
                                        <td>11426.35</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
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
