var btnsus = document.getElementById("suscribirme");




// Cuando usuario esta dejando la ventana activa
//$(document).mouseleave(function() {
function mostrarFormSus() {
    $('.bg, .form_suscrip').show();

}

// Cerrar el formulario suscripcion
$(document).ready(function() {
    $(".close").click(function(event) {
        $('.bg, .form_suscrip').hide();
        $('body').css({ 'overflow': 'auto' });

    });
});