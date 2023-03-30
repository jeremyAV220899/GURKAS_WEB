var Fn = {
    departamentos(){
        $.get('/servicios/ubigeo/departamento', function(response){
            $.each(response, function(index,value){
                $('#departamento').append($('<option/>', {
                    value: value.codigo,
                    text: value.nombre
                }))
            });
        });
    },
    provincias(codDepartamento){
        $.get('/servicios/ubigeo/provincia/'+codDepartamento, function(response){
            Fn.initprovincias(false);
            Fn.initdistritos(true);

            $.each(response, function(index,value){
                $('#provincia').append($('<option/>', {
                    value: value.codigo,
                    text: value.nombre
                }))
            });
        });
    },
    distritos(codProvincia){
        $.get('/servicios/ubigeo/distrito/'+codProvincia, function(response){
            Fn.initdistritos(false);
            $.each(response, function(index,value){
                $('#distrito').append($('<option/>', {
                    value: value.codigo,
                    text: value.nombre
                }))
            });
        });
    },
    initprovincias (valor){
    $('#provincia').html('').append($('<option/>', {
        value: '',
        text: '--- Seleccionar ---'
    })).attr('disabled',valor);
    },
    initdistritos (valor){
    $('#distrito').html('').append($('<option/>', {
        value: '',
        text: '--- Seleccionar ---'
    })).attr('disabled',valor);
    },
    seleccionarUbigeo(ubigeo,departamento,provincia,distrito){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });
        let datos = {
            ubigeo : ubigeo,
            departamento :departamento,
            provincia : provincia,
            distrito: distrito
        }
        $.ajax({
            url:'/servicios/ubigeo/seleccionar',
            data: datos,
            type: 'post',
            dataType : 'json',
            success: function (response){
                $('#'+response.dep).html(response.htmlDep);
                $('#'+response.prov).html(response.htmlProv);
                $('#'+response.dist).html(response.htmlDist);
            },
            error: function (xhr, status){
            }
        });
    }
}


