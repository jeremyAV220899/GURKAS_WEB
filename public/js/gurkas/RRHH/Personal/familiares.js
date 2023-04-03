$(document).ready(function(){

    $(document).ready(function() {
        $('.select2').select2({
            dropdownParent: $('#registrar')
        });
    });

    $('#CantHijos').change(function(){
        let cantidad = $(this).val();
        let html = '';
        for (let index = 0; index < cantidad; index++) {
            let cadena = `
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
