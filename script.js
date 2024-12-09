let index = 0;
const items = document.querySelectorAll('.carrossel-item');
const totalItems = items.length;

const setaEsquerda = document.querySelector('.seta-esquerda');
const setaDireita = document.querySelector('.seta-direita');
const carrosselContainer = document.querySelector('.carrossel-container');

function mostrarProximo() {
  index = (index + 1) % totalItems;
  atualizarCarrossel();
}

function mostrarAnterior() {
  index = (index - 1 + totalItems) % totalItems;
  atualizarCarrossel();
}

function atualizarCarrossel() {
  const novoTransform = -index * 100;
  carrosselContainer.style.transform = `translateX(${novoTransform}%)`;
}

setaEsquerda.addEventListener('click', mostrarAnterior);
setaDireita.addEventListener('click', mostrarProximo);

setInterval(mostrarProximo, 5000);


