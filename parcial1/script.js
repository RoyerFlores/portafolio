const btn = document.querySelector("#btn-confirmar");
const nameInput = document.querySelector("#nombre");
const msj = document.querySelector("#mensaje");

function showMessage() {

    msj.textContent = `Encargo recibido - te atiende Royer J. Flores Aruquipa`;
    msj.classList.remove("oculto");
}

btn.addEventListener("click", showMessage);