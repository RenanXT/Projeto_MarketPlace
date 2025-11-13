const Div = document.querySelector('div#divResp');
const btnForm = document.querySelector('button#txtResponder');
const lista = document.querySelectorAll('form#txtMsg');
const btn = document.querySelector('button#btnvoltarLista');

try {
    btnForm.addEventListener('click', ativarDiv);

    function ativarDiv() {
        setTimeout(() => {
            lista.forEach(L => {
                L.classList.remove('d-flex');
                L.classList.add('d-none');
            });

            Div.classList.remove('d-none');
            Div.style.display = 'flex';
        }, 300);
    }

    btn.addEventListener('click', () => {
        setTimeout(() => {
            lista.forEach(L => {
                L.classList.remove('d-none');
                L.classList.add('d-flex');
            });
            Div.classList.remove('d-flex');
            Div.classList.add('d-none');
        }, 300);
    });
} catch (error) {
    console.log('[ERRO] ->', error);
}
