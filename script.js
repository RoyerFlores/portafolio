const body = document.querySelector("body");
  const botonMode = document.querySelector("#btn-theme");

  const botonMenu = document.querySelector("#btn-menu");
  const menu = document.querySelector("nav ul");

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

  botonMode.addEventListener("click", alternarModo);
  botonMenu.addEventListener("click", alternarMenu);