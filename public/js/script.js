$(document).ready(function(){
    $.get('/servicios/ubigeo/departamento', function(response){
        
        $.each(response, function(index,value){
            $('#departamento').append($('<option/>', {
                value: value.codigo,
                text: value.nombre
            }))
        });
        provincias(true);
        distritos(true);
    })

    $('#departamento').on('change', function(){
        let codDepartamento = $(this).val();
        if(codDepartamento.length == 2){
            $.get('/servicios/ubigeo/provincia/'+codDepartamento, function(response){
                provincias(false);
                distritos(true);
    
                $.each(response, function(index,value){
                    $('#provincia').append($('<option/>', {
                        value: value.codigo,
                        text: value.nombre
                    }))
                });
            })
        }else{
            provincias(true);
            distritos(true);
        }
        
    });
    
    $('#provincia').on('change', function(){
        let codProvincia = $(this).val();
        if(codProvincia.length == 4){
            $.get('/servicios/ubigeo/distrito/'+codProvincia, function(response){

                distritos(false);
            
                $.each(response, function(index,value){
                    $('#distrito').append($('<option/>', {
                        value: value.codigo,
                        text: value.nombre
                    }))
                });
            })
        }else{
            distritos(true); 
        }  
    });

    function provincias(valor){
        $('#provincia').html('').append($('<option/>', {
            value: '',
            text: '--- Seleccionar ---'
        })).attr('disabled',valor);
    }

    function distritos(valor){
        $('#distrito').html('').append($('<option/>', {
            value: '',
            text: '--- Seleccionar ---'
        })).attr('disabled',valor);
    }
});