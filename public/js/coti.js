function agregarArticulo() {
    var textarea = document.getElementById("articulo").value;
    if (textarea.length > 0) {
        if (find_li(textarea)) {
            var li = document.createElement('li');
            li.innerHTML = "<button onclick='eliminar(this)'> Borrar Art&iacute;culo </button> ";
            var text = document.createTextNode(textarea);
            li.appendChild(text);
            document.getElementById("lista").appendChild(li);

        }
    }
    return false;
}

function find_li(contenido) {
    var el = document.getElementById("lista").getElementsByTagName("li");
    for (var i = 0; i < el.length; i++) {
        if (el[i].innerHTML == contenido)
            return false;
    }
    return true;
}

function eliminar(elemento) {
    elemento.parentNode.remove();
}