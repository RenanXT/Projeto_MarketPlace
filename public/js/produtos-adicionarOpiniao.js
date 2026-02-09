try {
    const senderBtn = document.querySelector('button#btnOpiniao');
    const div = document.querySelector('div#txtOpiniao');
    const divLista = document.querySelector('div#txtBloco');
    const EnviarBtn = document.querySelector('button#enviarBtn')

    senderBtn.addEventListener('click', controller);
    function controller() {
        const idProduto = document.querySelector('input#txtProduto').value;
        const opiniao = div.querySelector('textarea').value;

        toggleSender();
        EnviarBtn.addEventListener('click', (e) => {
            enviarOpiniao(idProduto, opiniao);
              e.preventDefault();
        })

    }

    // funcoes de visibilidade 
    function toggleSender() {
        const ativo = senderBtn.classList.toggle('ativo');

        if (ativo) {
            ativarInput();
            senderBtn.textContent = 'Cancelar';
        } else {
            desativarInput();
            senderBtn.textContent = 'Avaliar Produto';
        }
    }
    function toggleVisibilidade(mostrar, esconder) {
        esconder.classList.remove('d-flex');
        esconder.classList.add('d-none');

        mostrar.classList.remove('d-none');
        mostrar.classList.add('d-flex');
    }

    function ativarInput() {
        toggleVisibilidade(div, divLista);
    }

    function desativarInput() {
        toggleVisibilidade(divLista, div);
    }

    // funcoes de envio

    function enviarOpiniao(idProduto, opiniao) {

        const Dados = { produto: idProduto, texto: opiniao, btnEnviarOpiniao: true };

        $.ajax({
            type: "POST",
            url: "index.php?pagina=produtos",
            data: Dados,
            success: function (response) {
                console.log(response)                
            }
        });

    }

} catch (error) {
    console.log('[ERRO] -> ', error)
}