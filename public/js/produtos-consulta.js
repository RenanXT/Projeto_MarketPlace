try {
    document.addEventListener('DOMContentLoaded', () => {
        controller();
        console.log('DOM carregado, controller iniciado.');
    });

    function controller() {
        const btnFiltro = document.querySelectorAll('button[name=btnFiltro]');
        let filtro = '';


        btnFiltro.forEach(btn => {

            if (btn.textContent === 'Todos os Produtos') {
                filtro = '';
                ConsultarProdutos(filtro);
            }
            else {

                btn.addEventListener('click', () => {
                    console.log('Botão clicado: ', btn.textContent);
                    filtro = btn.textContent.trim();
                    ConsultarProdutos(filtro);
                })
            }
        })
    }


    function ConsultarProdutos(filtro) {

        const Dados = { filtro: filtro, btnConsultarProdutos: true };

        $.ajax({
            type: "POST",
            url: "index.php?pagina=produtos",
            data: Dados,
            dataType: "json",
            success: function (response) {
                const dados = JSON.parse(response);

                console.log('dados:', dados);
                const card = document.querySelector('#txtCard');

            },
            error: function (xhr, status, error) {
                console.log("ERROR");
                console.log("Status:", status);
                console.log("Error:", error);
                console.log("Response:", xhr.responseText);

                // ta de acordo com o GPT o problema é que o response vem em html e
                // e o post vem depois.
                /**
                 * Isso significa que:
                O PHP executou
                A consulta rodou
                Mas antes do json_encode já tinha HTML sendo impresso
                Então o Ajax entra no .error(xhr.responseText) porque a resposta não é JSON válido, é HTML + debug.
                 
                a solucao proposta por ele foi criar um arquivo separado para a consulta por ajax
                mas isso ta bugando minha cabeça demais, nao sei fazer isso ainda
                */
            }
        });
    }
} catch (error) {
    console.error('[ERRO] -> ', error);
}