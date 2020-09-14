console.log('hola');

var MC = document.getElementById("menuConstruccion");
var MMar = document.getElementById("menuMarmoleria");
var MD = document.getElementById("menuDesbaste");
var MMaq = document.getElementById("menuMaquinas");
var L1 = document.getElementById("link1");
var L2 = document.getElementById("link2");
var L3 = document.getElementById("link3");
var L6 = document.getElementById("link6");

function construccion() {
    if (MC.style.display == "flex" && L1.style.backgroundImage == "url('./img/botonera-ppal/btn_fdo_const-H.png')") {
        MC.style.display = "none";
        L1.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_const.png')";
        L2.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_marm.png')";
        L3.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_des.png')";
        L6.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_herr.png')";
        MMar.style.display = "none";
        MD.style.display = "none";
        MMaq.style.display = "none";
    } else {
        MC.style.display = "flex";
        MMar.style.display = "none";
        MD.style.display = "none";
        MMaq.style.display = "none";
        L1.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_const-H.png')";
        L2.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_marm.png')";
        L3.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_des.png')";
        L6.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_herr.png')";
    }

}

function marmoleria() {
    if (MMar.style.display == "flex" && L2.style.backgroundImage == "url('./img/botonera-ppal/btn_fdo_marm-H.png')") {
        L1.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_const.png')";
        L2.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_marm.png')";
        L3.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_des.png')";
        L6.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_herr.png')";
        MC.style.display = "none";
        MMar.style.display = "none";
        MD.style.display = "none";
        MMaq.style.display = "none";
    } else {
        MMar.style.display = "flex";
        MC.style.display = "none";
        MD.style.display = "none";
        MMaq.style.display = "none";
        L1.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_const.png')";
        L2.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_marm-H.png')";
        L3.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_des.png')";
        L6.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_herr.png')";
    }
}

function desbaste() {
    if (MD.style.display == "flex" && L3.style.backgroundImage == "url('./img/botonera-ppal/btn_fdo_des-H.png')") {
        MC.style.display = "none";
        MMar.style.display = "none";
        MMaq.style.display = "none";
        MD.style.display = "none";
        L1.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_const.png')";
        L2.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_marm.png')";
        L3.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_des.png')";
        L6.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_herr.png')";

    } else {
        MC.style.display = "none";
        MMar.style.display = "none";
        MMaq.style.display = "none";
        MD.style.display = "flex";
        L1.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_const.png')";
        L2.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_marm.png')";
        L3.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_des-H.png')";
        L6.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_herr.png')";

    }
}



function maquinas() {
    if (MMaq.style.display == "flex" && L6.style.backgroundImage == "url('./img/botonera-ppal/btn_fdo_herr-H.png')") {
        MMaq.style.display = "none";
        MC.style.display = "none";
        MMar.style.display = "none";
        MD.style.display = "none";
        L1.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_const.png')";
        L2.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_marm.png')";
        L3.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_des.png')";
        L6.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_herr.png')";
    } else {
        MC.style.display = "none";
        MMar.style.display = "none";
        MD.style.display = "none";
        MMaq.style.display = "flex";
        L1.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_const.png')";
        L2.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_marm.png')";
        L3.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_des.png')";
        L6.style.backgroundImage = "url('./img/botonera-ppal/btn_fdo_herr-H.png')";

    }
}