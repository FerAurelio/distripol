var campoProvincias = document.querySelector("select[name=state]");

//Traemos el formulario
var elFormulario = document.querySelector("#contact-form");
//El div de las Provincias, que aparece oculto
var divProvincias = document.querySelector("#provincias");


fetch("https://apis.datos.gob.ar/georef/api/getprovincias")
    .then(function(response) {
        return response.json();
    })
    .then(function(provincias) {
        provincias = provincias.data;
        for (var provincia of provincias) {
            var option = document.createElement("option");
            option.value = provincia.state;
            var optionText = document.createTextNode(provincia.state);
            option.append(optionText);
            campoProvincias.append(option);
        }
    })
    .catch(function(error) {
        console.log(error);
    })