$(document).ready(function(){
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
                $.each(response, function(index,value){
                    $('#estado_id').append($('<option/>', {
                        value: value.id,
                        text: value.nombre
                    }));
                });
                $('#estado_id').prop('disabled', false);
                $('#email').prop('disabled', false);
            });
        }
        
    })
});

