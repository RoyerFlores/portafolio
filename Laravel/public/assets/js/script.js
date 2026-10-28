const body = document.querySelector("body");
const botonMode = document.querySelector("#btn-theme");

const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

const contactForm = document.querySelector("#contact-form")
const contactWarning = document.querySelector("#contact-warning");

let day = false;

function alternarModo() {
  body.classList.toggle("light");
  day = !day;
  if (day) {
    botonMode.textContent = "Modo Oscuro"
  } else {
    botonMode.textContent = "Modo Claro"
  }
}

function alternarMenu() {
  menu.classList.toggle("open");
}

function contactReview(event) {
  event.preventDefault(); // Evita el envío automático por defecto

  const nombre = document.querySelector("#nombre").value.trim();
  const correo = document.querySelector("#correo").value.trim();
  const telefono = document.querySelector("#telefono").value.trim();
  const mensaje = document.querySelector("#mensaje").value.trim();

  if (nombre === "") {
    contactWarning.textContent = "Nombre vacío, rellene por favor";
    contactWarning.classList.add("error");
    contactWarning.classList.remove("success");
  } else if (!correo.includes("@")) {
    contactWarning.textContent = "Introduzca un correo válido";
    contactWarning.classList.add("error");
    contactWarning.classList.remove("success");
  } else if (telefono === "") {
    contactWarning.textContent = "Introduzca un teléfono válido";
    contactWarning.classList.add("error");
    contactWarning.classList.remove("success");
  } else if (mensaje === "") {
    contactWarning.textContent = "Introduzca un mensaje válido";
    contactWarning.classList.add("error");
    contactWarning.classList.remove("success");
  } else {
    // Se envía el formulario ÚNICAMENTE si todo es correcto
    contactForm.submit();
  }
}

botonMode.addEventListener("click", alternarModo);
botonMenu.addEventListener("click", alternarMenu);
contactForm.addEventListener("submit", contactReview);