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
    });

    $('#personal_id').change(function(){
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
        }else{
            $.get(url, function(response){
                console.log(response)
                $.each(response.estados, function(index,value){
                    console.log(value)
                    $('#estado_id').append($('<option/>', {
                        value: value.id,
                        text: value.nombre
                    }));
                });
                $('#hiddenUsuario').val(response.idPersonal)
                $('#email').val(response.email);
                $('#estado_id').val(response.idEstado).prop('disabled', false);
                $('#email').prop('disabled', false);
            });
        }
        
    })
});

