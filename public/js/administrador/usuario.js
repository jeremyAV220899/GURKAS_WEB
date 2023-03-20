$(document).ready(function(){
    $(document).ready(function() {
        $('.select2').select2({
            dropdownParent: $('#registrar')
        });
    });
    
    $('#registrarModal').click(function(){
        $('#estado_id option:first').prop('selected',true);
        $('#estado_id').prop('disabled', true);
        $('#email').prop('disabled', true);
        $('#dni').prop('disabled', true);
    });

    $('#name').change(function(){
        let id = $(this).val();
        let url = `/api/servicios/administrador/getAdministradorEstado/${id}`;
        $('#estado_id').html('').append($('<option/>', {
            value: '',
            text: '----- Seleccionar -----'
        }));
        if(id == ''){
            $('#estado_id option:first').prop('selected',true);
            $('#estado_id').prop('disabled', true);
            $('#email').prop('disabled', true);
            $('#dni').prop('disabled', true);
        }else{
            $.get(url, function(response){
                console.log(response)
                $.each(response.estados, function(index,value){
                    $('#estado_id').append($('<option/>', {
                        value: value.id,
                        text: value.nombre
                    }));
                });
                $('#hiddenUsuario').val(response.idPersonal)
                $('#email').val(response.email);
                $('#dni').val(response.doc_ident);
                $('#estado_id').val(response.idEstado).prop('disabled', true);
                //$('#email').prop('disabled', false);
            });
        }  
    })

    $('.btnCrearUsuario').click(function() {
        let val_url = '/usuario/guardar';
        $('.titulo').html('Registrar Usuario');
        $('.btnRegistrar').html('Registrar');
        $('#name option:first').prop('selected', true);
        $('#email').val(''); 
        $('#password').val(''); 
        $('#dni').val(''); 
        $('#estado_id option:first').prop('selected', true);       
        $('#formulario').attr('action', val_url);
        $('#registrar').modal('show');
    });

});

