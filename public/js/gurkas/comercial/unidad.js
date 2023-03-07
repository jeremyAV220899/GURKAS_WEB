$(document).ready(function(){
    $('.btnCrearUnidad').click(function() {
        let val_url = '/comercial/unidades/guardar';
        $('.titulo').html('Registrar Unidad');
        $('.btnRegistrar').html('Registrar');
        $('#cod_unidad').val('');
        $('#razon_social').val('');
        $('#ruc').val('');
        $('#nombre_comercial').val('');
        $('#departamento option:first').prop('selected',true);
        $('#provincia option:first').prop('selected',true);
        $('#distrito option:first').prop('selected',true);
        $('#direccion').val('');
        $('#represetante_legal').val('');
        $('#doct_ident_repre_leg').val('');
        $('#cargo_repre_leg').val('');
        $('#contacto').val('');
        $('#telefono').val('');
        $('#celular').val('');
        $('#correo').val('');
        $('#centro_costo').val('');
        $('#estado_id option:first').prop('selected',true);
        $('#empresa_id option:first').prop('selected',true);
        $('#longitud').val('');
        $('#latitud').val('');
        $('#fecha_activacion').val('');
        $('#fecha_baja').val('');
        $('#formulario').attr('action', val_url);
        Fn.departamentos();
        Fn.initprovincias(true);
        Fn.initdistritos(true);
        $('#registrar').modal('show');
    })

    $('#tablaUnidad').on('click', '.btnEditar', function() {
        let val_id = $(this).data('id');
        let val_url = '/comercial/unidades/editar/' + val_id;

        $.get(val_url, function(res) {
            $('.titulo').html('Editar Unidad');
            $('.btnRegistrar').html('Editar');
            $('#cod_unidad').val(res.unidad.cod_unidad);
            $('#razon_social').val(res.unidad.razon_social);
            $('#ruc').val(res.unidad.ruc);
            $('#nombre_comercial').val(res.unidad.nombre_comercial);
            Fn.seleccionarUbigeo(res.unidad.cod_distrito,'departamento','provincia','distrito');
            $('#direccion').val(res.unidad.direccion);
            $('#represetante_legal').val(res.unidad.represetante_legal);
            $('#doct_ident_repre_leg').val(res.unidad.doct_ident_repre_leg);
            $('#cargo_repre_leg').val(res.unidad.cargo_repre_leg);
            $('#contacto').val(res.unidad.contacto);
            $('#telefono').val(res.unidad.telefono);
            $('#celular').val(res.unidad.celular);
            $('#correo').val(res.unidad.correo);
            $('#centro_costo').val(res.unidad.centro_costo);
            $('#estado_id').val(res.unidad.estado_id);
            $('#empresa_id').val(res.unidad.empresa_id);
            $('#longitud').val(res.unidad.longitud);
            $('#latitud').val(res.unidad.latitud);
            $('#fecha_activacion').val(res.unidad.fecha_activacion);
            $('#fecha_baja').val(res.unidad.fecha_baja);
            $('#departamento').val(res.unidad.cod_departamento);
            $('#formulario').attr('action', '/comercial/unidades/actualizar/' + val_id);
            $('#registrar').modal('show');
        });
    });

    $('#tablaUnidad').on('click', '.btnBorrar', function(){
        let id = $(this).data('id');
        let url = '/comercial/unidades/borrar/'+id;
        $.get(url,function(res){
            if(res =='ok'){
                location.reload();
            }else{
                toastr.warning('La Unidad esta siendo usado en un registro','Error',{"progressBar": true});
            }
        });
    })

    $('#departamento').on('change', function(){
        let codDepartamento = $(this).val();
        if(codDepartamento.length == 2) {
            Fn.initprovincias(false);
            Fn.initdistritos(true);
            Fn.provincias(codDepartamento);
        }else{
            Fn.initprovincias(true);
            Fn.initdistritos(true);
        }
    });

    $('#provincia').on('change', function(){
        let codProvincia = $(this).val();
        if(codProvincia.length == 4){
            Fn.initdistritos(false);
            Fn.distritos(codProvincia)
        }else{
            Fn.initdistritos(true);
        }
    });

});
