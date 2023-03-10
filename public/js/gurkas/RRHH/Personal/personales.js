$(document).ready(function(){
    $('.btnCrearPersonal').click(function() {
        let val_url = '/rrhh/personales/index/guardar';
        $('.titulo').html('Registrar Datos Personales');
        $('.btnRegistrar').html('Registrar');
        $('#cod_empleado').val('');
        $('#nombre_empleado').val('');
        $('#apellido_paterno').val('');
        $('#apellido_materno').val('');
        //$('#nombre_completo').val(''); concatenar
        //$('#foto').val('');
        //$('#edad_empleado').val('');
        $('#fecha_nacimiento').val('');
        $('#genero_id option:first').prop('selected',true);
        $('#documento_id option:first').prop('selected', true);
        $('#doc_ident').val('');
        $('#fecha_emision').val('');
        $('#fecha_caducidad').val('');
        $('#cod_ubigeo').val('');
        $('#brevete_id option:first').prop('selected', true);
        $('#num_brevete').val('');
        $('#nacionalidad_id option:first').prop('selected', true);
        $('#departamento option:first').prop('selected',true);
        $('#provincia option:first').prop('selected',true);
        $('#distrito option:first').prop('selected',true);
        $('#direccion_personal').val('');
        $('#telefono').val('');
        $('#celular').val('');
        $('#correo').val('');
        $('#horas_id option:first').prop('selected', true);
        $('#situaciones_id option:first').prop('selected', true);
        $('#grados_id option:first').prop('selected', true);
        $('#estado_id option:first').prop('selected', true);
        $('#puesto_id option:first').prop('selected', true);
        $('#empresa_id option:first').prop('selected', true);
        $('#contrato_id option:first').prop('selected', true);
        $('#fecha_inicio_contrato').val('');
        $('#fecha_fin_contrato').val('');
        $('#unidad_id option:first').prop('selected', true);
        $('#sede_id option:first').prop('selected', true);
        $('#turno_id option:first').prop('selected', true);
        $('#armado_id option:first').prop('selected', true);
        $('#talla_id option:first').prop('selected', true);
        $('#talla_pantalon').val('');
        $('#talla_calzado').val('');
        $('#estatura').val('');
        $('#fecha_inicio_laboral').val('');
        $('#fecha_fin_laboral').val('');
        $('#fecha_activacion_laboral').val('');
        //$('#unidad_id option:first').prop('selected',true);
        $('#formulario').attr('action', val_url);
        Fn.departamentos();
        Fn.initprovincias(true);
        Fn.initdistritos(true);
        $('#registrar').modal('show');
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

    $('#doc_ident').keyup(function(){
        if($('#doc_ident').val().length == 8 && $('#puesto_id').val().length >= 1){
            $('#cod_empleado').val($('#puesto_id').val()+$('#doc_ident').val())
        }
    });

    $('#puesto_id').change(function(){
        if($('#puesto_id').val().length >= 1 && $('#doc_ident').val().length == 8){
            $('#cod_empleado').val($('#puesto_id').val()+$('#doc_ident').val())
        }
    });
});
