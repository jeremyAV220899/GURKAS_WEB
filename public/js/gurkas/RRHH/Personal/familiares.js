$(document).ready(function(){

    $(document).ready(function() {
        $('.select2').select2({
            dropdownParent: $('#registrar')
        });
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
        let html = '';
        for (let index = 0; index < cantidad; index++) {
            let cadena = `
            <div class="col-12 stiloHijo">
                <label for="formFile" class="form-label">DNI ${index+1}</label>
                <input class="form-control" name="img${index+1}" type="file" id="formFile">
            </div>
            <div class="col-6 stiloHijo">
                <label class="form-label">Hijo(a) ${index+1}</label>
                <input type="text" class="form-control" name="hijo${index+1}">
            </div>
            <div class="col-6 stiloHijo">
                <label class="form-label">DNI ${index+1}</label>
                <input type="text" class="form-control" name="dni${index+1}">
            </div>
            `;
            html += cadena;
        }
        $('.stiloHijo').remove();
        $('#hijos').after(html);
    })
});
