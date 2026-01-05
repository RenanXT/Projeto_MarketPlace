try {
    const Tag = document.querySelectorAll('button.menu-btn');
const tagList = document.querySelectorAll('div.tagID');

function controller() {
    const content = this.id;
    const div = document.querySelector(`div#Id_${content}`);
    console.log(this)

    Tag.forEach(btn => {
        btn.style.background = '';
    });

    tagList.forEach(item => {
        desativarDiv(item);
    });

    this.style.background = 'linear-gradient(to bottom, #000000ff, #383838ff)';
    ativarDiv(div);
}
function desativarDiv(item) {
    item.classList.remove('d-flex');
    item.classList.add('d-none');
}

function ativarDiv(div) {
    div.classList.remove('d-none');
    div.classList.add('d-flex');
}

Tag.forEach(btn => {
    btn.addEventListener('click', controller);
});

} catch (error) {
    console.log('[ERRO] editarDados.js ->> ', error);
}