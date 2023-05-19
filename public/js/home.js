$(document).ready(function(){
    contPersonal();

})
function contPersonal(){
    $.get('/api/personal/contador', function(res){
        $('#contadorPersonal').html(res);
    })

    $.get('/api/personal/contador/activo', function(res){
        $('#contadorPersonalActivo').html(res);
    })

    $.get('/api/personal/contador/baja', function(res){
        $('#contadorPersonalBaja').html(res);
    })
}