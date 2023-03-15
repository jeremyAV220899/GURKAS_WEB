$(document).ready(function(){
    $('.btnCrearSede').click(function() {
        let val_url = '/comercial/sedes/guardar';
        $('.titulo').html('Registrar Sede');
        $('.btnRegistrar').html('Registrar');
        $('#nombre_sede').val('');
        $('#estado_id option:first').prop('selected',true);
        $('#departamento option:first').prop('selected',true);
        $('#provincia option:first').prop('selected',true);
        $('#distrito option:first').prop('selected',true);
        $('#direccion').val('');
        $('#fecha_activacion').val('');
        $('#fecha_baja').val('');       
        $('#longitud').val('');
        $('#latitud').val('');
        $('#ubicacion').val('');
        $('#contacto').val('');
        $('#correo').val('');
        $('#celular').val('');
        $('#centro_costo').val('');
        $('#unidad_id option:first').prop('selected',true);
        $('#formulario').attr('action', val_url);
        Fn.departamentos();
        Fn.initprovincias(true);
        Fn.initdistritos(true);
        $('#registrar').modal('show');
    })

    $('.tablaSede').on('click', '.btnEditar', function() {
        let val_id = $(this).data('id');
        let val_url = '/comercial/sedes/editar/' + val_id;
        $.get(val_url, function(res) {
            $('.titulo').html('Editar Sede');
            $('.btnRegistrar').html('Editar');
            $('#nombre_sede').val(res.sede.nombre_sede);
            $('#estado_id').val(res.sede.estado_id);
            $('#direccion').val(res.sede.direccion);
            Fn.seleccionarUbigeo(res.sede.cod_distrito,'departamento','provincia','distrito');
            $('#fecha_activacion').val(res.sede.fecha_activacion);
            $('#fecha_baja').val(res.sede.fecha_baja);
            $('#longitud').val(res.sede.longitud);
            $('#latitud').val(res.sede.latitud);
            $('#ubicacion').val(res.sede.ubicacion);
            $('#contacto').val(res.sede.contacto);
            $('#correo').val(res.sede.celular);
            $('#celular').val(res.sede.correo);
            $('#centro_costo').val(res.sede.centro_costo);
            $('#unidad_id').val(res.sede.unidad_id);
            $('#departamento').val(res.sede.cod_departamento);
            $('#formulario').attr('action', '/comercial/sedes/actualizar/' + val_id);
            $('#registrar').modal('show');
        });
    });

    $('.tablaSede').on('click', '.btnVer', function() {
        let val_id = $(this).data('id');
        let val_url = '/comercial/sedes/ver/' + val_id;
            
        $.get(val_url, function(res) {
            $('#nombre_sede_ver').val(res.sede.nombre_sede);
            $('#estado_id_ver').val(res.sede.estado_id);
            Fn.seleccionarUbigeo(res.sede.cod_distrito,'departamento_ver','provincia_ver','distrito_ver');
            $('#direccion_ver').val(res.sede.direccion);
            $('#fecha_activacion_ver').val(res.sede.fecha_activacion);
            $('#fecha_baja_ver').val(res.sede.fecha_baja);
            $('#latitud_ver').val(res.sede.latitud);
            $('#longitud_ver').val(res.sede.longitud);
            $('#unidad_id_ver').val(res.sede.unidad_id);//FALTA
            $('#contacto_ver').val(res.sede.contacto);
            $('#correo_ver').val(res.sede.correo);
            $('#celular_ver').val(res.sede.celular);
            $('#centro_costo_ver').val(res.sede.centro_costo);
            $('#ubicacion_ver').attr('src',res.sede.ubicacion);
            $('#visualizar').modal('show');
        });
    });

    $('.tablaSede').on('click', '.btnBorrar', function(){
        let id = $(this).data('id');
        let url = '/comercial/sedes/borrar/'+id;
        $.get(url,function(res){
            if(res =='ok'){
                location.reload();
            }else{
                toastr.warning('La Sede esta siendo usado en un registro','Error',{"progressBar": true});
            }
        });
    });

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
