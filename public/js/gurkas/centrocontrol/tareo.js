$(document).ready(function(){
    $('#sede_id').prop('disabled', true);
    $('#empresa_id').prop('disabled', true);

    $('#unidad_id').change(function(){
        let id = $(this).val();
        let url = `/api/servicios/centrocontrol/getSedes/${id}`;
        $('#sede_id').html('').append($('<option/>', {
            value: '',
            text: '----- Seleccionar -----'
        }));
        if(id == ''){
            $('#sede_id option:first').prop('selected',true);
            $('#sede_id').prop('disabled', true);
            $('#empresa_id').prop('disabled', true);
        }else{
            $.get(url, function(response){
                $.each(response, function(index,value){
                    $('#sede_id').append($('<option/>', {
                        value: value.id,
                        text: value.nombre_sede
                    }));
                });
                $('#sede_id').prop('disabled', false);
            });
        }
    })

    $('#unidad_id').change(function(){
        let id = $(this).val();
        //$('#hiddenUsuario').val(id);
        let url = `/api/servicios/administrador/getAdministradorEmpresa/${id}`;
        if(id == ''){
            $('#empresa_id option:first').prop('selected',true);
            $('#empresa_id').prop('disabled', true);
        }else{
            $.get(url, function(response){
                $.each(response.empresas, function(index,value){
                    $('#empresa_id').append($('<option/>', {
                        value: value.id,
                        text: value.nombre
                    }));
                });
                //$('#hiddenUsuario').val(response.idPersonal)
                $('#empresa_id').val(response.idEmpresa).prop('disabled', true);
                //$('#email').prop('disabled', false);
            });
        }  
    })

    window.onload = function(){
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth()+1; //obteniendo mes
        var dia = fecha.getDate(); //obteniendo dia
        var ano = fecha.getFullYear(); //obteniendo año
        if(dia<10)
          dia='0'+dia; //agrega cero si el menor de 10
        if(mes<10)
          mes='0'+mes //agrega cero si el menor de 10
        document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
      }
});
