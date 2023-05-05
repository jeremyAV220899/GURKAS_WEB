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
    <h6 class="mb-0 text-uppercase">LISTA DE DATOS Laborales</h6>
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
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 100.641px;">
                                            Cód. Empleado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 200.094px;">Nombres</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 112.406px;">Apellido Paterno</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Apellido Materno</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 84.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laborales as $laboral)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
<script lenguaje="javascript">
    $("#pensionario").on('change', function () {
        let elegido=$(this).val();
        if (elegido != ""){
            $.get('/pensiones/'+elegido, function(data){
                if(data.estado){
                    $("#afp").html(data.afp).prop('disabled', true);
                    $("#comision").html(data.comision).prop('disabled', true);
                    $("#movimiento").html(data.movimiento).prop('disabled', true);
                    $("#afpcuspp").val(data.afpcuspp).prop('disabled', true);
                }else{
                    $("#afp").html(data.afp).prop('disabled', false);
                    $("#comision").html(data.comision).prop('disabled', false);
                    $("#movimiento").html(data.movimiento).prop('disabled', false);
                    $("#afpcuspp").val(data.afpcuspp).prop('disabled', false);
                }
            });
        }else{
            $('#afp').html('<option value="">--- Seleccionar ---</option>').prop('disabled', true);
            $('#afpcuspp').val('').prop('disabled', true);
            $('#comision').html('<option value="">--- Seleccionar ---</option>').prop('disabled', true);
            $('#movimiento').html('<option value="">--- Seleccionar ---</option>').prop('disabled', true);
        }
    })

    /*$("#pensionario").on('change', function () {
        $("#pensionario option:selected").each(function () {
            let elegido=$(this).val();
            $.get('/comisiones/'+elegido, function(data){
                $("#comision").html(data);
            });
        });
    });

    $("#pensionario").on('change', function () {
        $("#pensionario option:selected").each(function () {
            let elegido=$(this).val();
            $.get('/movimientos/'+elegido, function(data){
                $("#movimiento").html(data);
            });
        });
    });*/
</script>
@endsection

