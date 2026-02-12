try {
    document.addEventListener('DOMContentLoaded', () => {
        controller();
    });

    function controller() {
        const btnFiltro = document.querySelectorAll('button[name=btnFiltro]');

        ConsultarProdutos('');

        btnFiltro.forEach(btn => {
            btn.addEventListener('click', () => {

                let filtro = btn.textContent.trim();

                if (filtro === 'Todos os Produtos') {
                    filtro = '';
                }

                console.log('Botão clicado:', filtro);
                ConsultarProdutos(filtro);
            });
        });
    }


    function ConsultarProdutos(filtro) {

        const Dados = { filtro: filtro, btnConsultarProdutos: true };

        $.ajax({
            type: "POST",
            url: "index.php?pagina=produtos",
            data: Dados,
            dataType: "json",
            success: function (response) {

                console.log('Resposta do servidor:', response);

                const form = document.querySelector('#txtForm');
                const modelo = document.querySelector('#txtCard');
                
                form.innerHTML = '';

                for (let i = 0; i < response.length; i++) {
                    const produtos = modelo.cloneNode(true);
                    produtos.classList.remove('d-none');
                    console.log(produtos);
                    
                    form.appendChild(produtos);

                    const img = produtos.querySelector('.card-img');
                    const nome = produtos.querySelector('#nomeID');
                    const preco = produtos.querySelector('#precoID');
                    img.src = response[i].caminho_arquivo;
                    nome.textContent = response[i].nome;
                    preco.textContent = `R$ ${response[i].preco}`;  

                }

            },
            error: function (xhr) {
                console.log('[ERRO] xhr-> ', xhr.responseText);

                /**
                 * ele retorna registros json mas antes disso ele imprime 
                 * html no console por isso cai no erro ja que nao consegue 
                 * tratar o response como json, no caso ta imprimindo o html 
                 * da pagina do html_Header.php
                 *
                 * resolvi o problema mudando a ordem dos includes na raiz do projeto,
                 * no caso o index. Ele imprimia o html_header antes da navegacao.php ai por 
                 * isso gerava html no console antes do json
                 **/
            }

        });
    }
} catch (error) {
    console.error('[ERRO] -> ', error);
}