const div = document.querySelector('div#perfilGlow')

div.addEventListener('mouseOver', focarElemento)
 function focarElemento(id) {
    const elemento = document.getElementById(id);

    elemento.classList.add("GlowTransition");

    elemento.focus();

  }

  window.onload = () => {
    focarElemento("perfilGlow");
  };