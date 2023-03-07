
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
    
    function servicioDepartamento(){
        $.get('/servicios/ubigeo/departamento', function(response){
        
            $.each(response, function(index,value){
                $('#departamento').append($('<option/>', {
                    value: value.codigo,
                    text: value.nombre
                }));
            });
        });
       
    }
    
    function servicioProvincia(departamento){
        $.get('/servicios/ubigeo/provincia/'+departamento, function(response){
            $.each(response, function(index,value){
                $('#provincia').append($('<option/>', {
                    value: value.codigo,
                    text: value.nombre
                }))
            });
           
        });
        
        
    }
    
    function servicioDistrito(provincia){
        $.get('/servicios/ubigeo/distrito/'+provincia, function(response){
    
            
        
            $.each(response, function(index,value){
                $('#distrito').append($('<option/>', {
                    value: value.codigo,
                    text: value.nombre
                }))
            });
        });
       
    }
    
    function seleccionarUbigeo(departamento,provincia,distrito){
        console.log(departamento,provincia,distrito )
        provincias(false);
        distritos(false);
        servicioDepartamento(); 
        $('#departamento').val(departamento);
        servicioProvincia(departamento);
        servicioDistrito(provincia)
        $('#provincia').val(provincia);
        
        $('#distrito').val(distrito);    
        
    }






function selectProvincia(provincia){
    console.log(666);
    let estado = true;
    if(estado){
        $('#provincia').val(provincia);
        if($('#provincia').val() == provincia){
            estado = false;
        }
        setTimeout(selectProvincia(),10000)
    
    }
    
}