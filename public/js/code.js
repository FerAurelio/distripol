var btnsus = document.getElementById("suscribirme");




// Cuando usuario esta dejando la ventana activa
//$(document).mouseleave(function() {
function mostrarFormSus() {
    $('.bg, .formSuscrip').show();

}

// Cerrar el formulario suscripcion
$(document).ready(function() {
    $(".close").click(function(event) {
        $('.bg, .formSuscrip').hide();
        $('body').css({ 'overflow': 'auto' });

    });
});