
const detalhes = document.querySelector('div#detalhesId')
const voltar = document.querySelector('button#btnVoltar')
const Form = document.querySelector('form#txtForm');
const button = document.querySelectorAll('button.btnEnviar');

button.forEach(button => {
    button.addEventListener('click', () => {
        const card = button.closest('.card-produto');
        const input = card.querySelector('input[name="DataProd"]');
        const produto = JSON.parse(input.value);

        const dados = new FormData();
        dados.append('DataProd', input.value);

        $.ajax({
            url: 'index.php?pagina=produtos',
            method: 'POST',
            data: dados,
            processData: false,
            contentType: false,
            success: function (response) {

                setTimeout(() => {
                    Form.style.opacity = 0;
                    Form.style.height = "0%"
                    detalhes.classList.add('visivel')
                    detalhes.style.opacity = 1;
                }, 100);

                const img = detalhes.querySelector('img#imgProd');
                const caracteristicas = detalhes.querySelector('p#txtCaract');
                const descricao = detalhes.querySelector('p#txtDesc');
                const nome = detalhes.querySelector('h4#txtNome');
                const preco = detalhes.querySelector('h3#txtPreco');
                img.src = produto.caminho_arquivo;
                nome.textContent = produto.nome;

                preco.textContent = `R$ ${produto.preco}`;
                descricao.textContent = produto.descricao;
            }
        });
    });
});


voltar.addEventListener('click', voltarLista)

function voltarLista() {
    detalhes.style.display = "none";
    detalhes.style.opacity = 0;
    detalhes.classList.remove('visivel')
    setTimeout(() => {
        Form.display = "flex"
        Form.style.opacity = 1;
    }, 300);

};



