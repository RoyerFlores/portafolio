
let formulario = document.querySelector("#form-horno");
let aviso = document.querySelector("#aviso-horno");

function validar(event) {
    let nombre = document.querySelector("#nombre").value;
    let correo = document.querySelector("#correo").value;
    let pedido = document.querySelector("#pedido").value;

    if (nombre == "" || correo == "") {
        event.preventDefault();
        aviso.textContent = "Debe llenar su nombre y correo";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    } else if (!correo.includes("@")) {
        event.preventDefault();
        aviso.textContent = "Introduzca un correo válido por favor";
        aviso.classList.add("error");
        aviso.classList.remove("éxito");
    } else {
        aviso.textContent = "Pedido tomado - te atiende Royer J. Flores Aruquipa";
        aviso.classList.add("éxito");
        aviso.classList.remove("error");
    }
}

formulario.addEventListener("submit", validar);
