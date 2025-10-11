const voltar = document.querySelector('#btnVoltar');
const avancar = document.querySelector('#btnAvancar');
const slide = document.querySelector('#slide');
const cards = document.querySelectorAll('.card');
const container = slide.parentElement; // overflow-hidden

let distancia = 0;

voltar.addEventListener('click', () => {
  if (distancia === 0) return;
  distancia += cards[0].getBoundingClientRect().width + parseFloat(getComputedStyle(slide).gap);
  moverSlide(distancia);
});

avancar.addEventListener('click', () => {
  const larguraTotal = slide.scrollWidth;
  const larguraVisivel = container.offsetWidth;

  if (Math.abs(distancia) + larguraVisivel >= larguraTotal) return;

  distancia -= cards[0].getBoundingClientRect().width + parseFloat(getComputedStyle(slide).gap);
  moverSlide(distancia);
});

function moverSlide(dist) {
  slide.style.transform = `translateX(${dist}px)`;
}
