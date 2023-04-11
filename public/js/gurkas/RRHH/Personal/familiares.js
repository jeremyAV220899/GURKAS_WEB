$(document).ready(function(){
        $('.select2').select2({
            dropdownParent: $('#registrar')
        });

    $('.btnCrearFamiliar').click(function() {
        let val_url = '/rrhh/personal/familiares/guardar';
        $('.titulo').html('Registrar Familiar');
        $('.btnRegistrar').html('Registrar');
        $('#nombPersonal option:first').prop('selected', true);
        $('#formulario').attr('action', val_url);
        $('#registrar').modal('show');
    });

    $('#num_hijos').change(function(){
        let cantidad = $(this).val();
        $('.stiloHijo1 , .stiloHijo2 , .stiloHijo3 , .stiloHijo4').css('display', 'none');
        let selector = '';
        let html = '';
        if(cantidad !=''){
            for (let index = 0; index < cantidad; index++) {
                selector = '.stiloHijo'+(index+1) 
                $(selector).css('display', 'inline');               
            }
        }
    })

    $('#CheckHijos').change(function(){
        if($(this).is(':checked')){
            $('#hijoGeneral').show();
        }else{
            $('#hijoGeneral').hide();
        }
    })

    $('#CheckPareja').change(function(){
        if($(this).is(':checked')){
            $('.parejaGeneral').show();
        }else{
            $('.parejaGeneral').hide();
        }
    })
    
    $('#nombPersonal').change(function(){
        let valor = $(this).val();
        if(valor != ''){
            $('.btnRegistrar').show();
            $('#CheckHijos').prop('disabled', false);
            $('#CheckPareja').prop('disabled', false);
        }else{
            $('#num_hijos').click().val('');
            $('.stiloHijo1 , .stiloHijo2 , .stiloHijo3 , .stiloHijo4').css('display', 'none');
            $('#hijoGeneral').hide();
            $('#CheckHijos').prop('disabled', true);
            $('#CheckPareja').prop('disabled', true);
        }
    })
});
