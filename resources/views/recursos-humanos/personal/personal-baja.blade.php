@extends('layouts.apps')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Recursos Humanos</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Personal</li>
                </ol>
            </nav>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">REGISTRO DE DATOS PERSONALES</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-striped table-bordered dataTable tablaPersonal"
                                role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 80.641px;">
                                            Cód. Empleado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 30.094px;">Foto</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 190.094px;">Nombres y Apellidos</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 70.406px;">Estado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Nacionalidad</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 84.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personales as $ids => $personal)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $personal->cod_empleado }}</td>
                                            <td><img src="{{ Storage::url($personal->imagen) }}" alt=""
                                                    class="product-img-2"></td>
                                            <td>{{ $personal->nombre_completo }}</td>
                                            <td><span
                                                    class="badge bg-light-{{ Util::estadoPersonalColor($personal->estado->id) }} text-{{ Util::estadoPersonalColor($personal->estado->id) }} w-100">{{ $personal->estado->nombre }}</span>
                                            </td>
                                            <td>{{ $personal->nacionalidad->nombre }}</td>
                                            <td>
                                                <div class="table-actions d-flex align-items-center fs-6">
                                                    <a class="btn text-success btnBorrar" title="Recuperar" type="button"
                                                        href="{{ route('personal.recuperar', $personal->id) }}">
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
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/gurkas/RRHH/Personal/personales.js"></script>
    <script type="text/javascript"></script>
@endsection
