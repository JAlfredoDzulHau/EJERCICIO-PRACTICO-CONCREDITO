

function confirmacion(e) {
    if (confirm("¿Esta seguro que quiere salir?, perderá sus datos")) {
        return true;

    }else{
        e.preventDefault();
    }
}
let linkSalir = document.querySelectorAll(".salir");

for(var i = 0; i < linkSalir.length; i++){
    linkSalir[i].addEventListener('click', confirmacion);
}