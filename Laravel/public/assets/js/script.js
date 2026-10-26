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
  event.preventDefault();

  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre === "") {
    contactWarning.textContent = "Nombre vacío, rellene por favor";
    contactWarning.classList.add("error");
    contactWarning.classList.remove("success");
  } else if (correo.includes("@") === false) {
    contactWarning.textContent = "Introduzca un correo válido";
    contactWarning.classList.add("error");
    contactWarning.classList.remove("success");
  }
  else {
    contactWarning.textContent = "Mensaje enviado correctamente! te contactaremos lo antes posible";
    contactWarning.classList.add("success");
    contactWarning.classList.remove("error");
  }

  contactForm.submit();
}

botonMode.addEventListener("click", alternarModo);
botonMenu.addEventListener("click", alternarMenu);
contactForm.addEventListener("submit", contactReview);