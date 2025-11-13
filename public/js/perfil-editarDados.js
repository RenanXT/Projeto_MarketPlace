const container = document.querySelector('div.divDados');
const divItems = document.querySelectorAll('.divDados .item');

container.addEventListener('click', clickCallback);

// funcoes complementares

function clickCallback(evento) {
    const div = evento.target.closest('.item');

    if (!div) return;

    desativarDivs();
    ativarDiv(div);
}

function ativarDiv(div) {
    if (!div) return;

    const inputs = div.querySelectorAll('input');
    const buttons = div.querySelectorAll('button');

    div.classList.add('glow-border');

    inputs.forEach(input => {
        input.removeAttribute('disabled', true);
        input.classList.remove('text-secondary');
        input.classList.add('text-white');
    });

    buttons.forEach(button => {
        button.removeAttribute('disabled', true);
        button.classList.remove('text-secondary');
        button.classList.add('text-white');
    });
}
function desativarDivs() {

    divItems.forEach(div => {
        const inputs = div.querySelectorAll('input');
        const buttons = div.querySelectorAll('button');

        div.classList.remove('glow-border');

        inputs.forEach(input => {
            input.setAttribute('disabled', true);
            input.classList.remove('text-white');
            input.classList.add('text-secondary');
        });

        buttons.forEach(button => {
            button.setAttribute('disabled', true);
            button.classList.remove('text-white');
            button.classList.add('text-secondary');
        });
    });
}

// funcoes de edicao 

