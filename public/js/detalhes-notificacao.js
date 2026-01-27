try {
    const forms = document.querySelectorAll('form[id^="form_"]') ?? '';
    const detalhes = document.querySelector('div#txtDetalhes');
    const respBox = document.querySelector('div#divResp');
    const Excluir = document.querySelector('div#divExcluir');
    const btnResp = document.querySelectorAll('button.btnResponder');
    const voltar = document.querySelectorAll('button.Voltar');

    if (forms.length > 0) {
        forms.forEach(form => {
            // só por questões de conceito: substitui 'form_' por uma string vazia, o resto do texto se mantém
            // ou seja, o id!
            const id = form.id.replace('form_', '');
            const btn = form.querySelector(`button#btnData_${id}`);
            btn.addEventListener('click', ativarDiv);

            const jsonString = document.querySelector(`input#dados_${id}`).value;
            const Dados = JSON.parse(jsonString);

            function ativarDiv() {
                const box = document.querySelector(`form#form_${id}`);
                console.log(box)

                forms.forEach(list => {
                    list.classList.remove('d-flex');
                    list.classList.add('d-none');
                })
                box.classList.remove('d-none');
                box.classList.add('d-flex');
                box.classList.add('h-0');
                box.style.opacity = '0';

                console.log(Dados)

                setTimeout(() => {
                    detalhes.classList.remove('d-none');
                    detalhes.classList.add('d-flex');
                }, 500);

                document.querySelector('h3#txtAssunto').textContent = Dados.assunto;
                document.querySelector('p#txtDadosR').textContent = Dados.nome;
                document.querySelector('p#txtEmailLoja').textContent = Dados.email;
                document.querySelector('p#txtUser').textContent = Dados.remetente;
                document.querySelector('p#txtMsg').textContent = Dados.mensagem;


                btnResp.forEach(btn => {


                    btn.addEventListener('click', () => {


                        detalhes.classList.remove('d-flex');
                        detalhes.classList.add('d-none');

                        respBox.classList.remove('d-none');
                        respBox.classList.add('d-flex');


                        document.querySelector('input#txtTarget').value = Dados.remetente;
                        document.querySelector('input#AssuntoId').value = Dados.assunto;

                        const msg = document.querySelector('textarea#txtRespMsg');
                        const btnEnviar = document.querySelector('button#btnMsg');

                        btnEnviar.addEventListener('click', () => {
                            $.ajax(({

                                // aqui voce quebra a regra do controller, onde é ele que 
                                // gerencia a navegacao das paginas, mas é facil de arrumar
                                url: '/../Projeto_MarketPlace/app/model/EnviarNotificacao.php',
                                method: 'POST',
                                data: Mensagem = {
                                    usuario: Dados.id_usuario,
                                    loja: Dados.id_loja,
                                    assunto: Dados.assunto,
                                    msg: msg.value,
                                    remetente: document.querySelector('input#txtSender').value,
                                    destinatario: Dados.remetente
                                },
                                success: function (response) {
                                    console.log(response, 'ok')
                                    console.log(Mensagem)
                                    const Success = document.querySelector('button#btnSuccess');

                                    Success.classList.remove('d-none');
                                    Success.classList.add('d-flex');

                                    setTimeout(() => {

                                        Success.classList.remove('d-flex');
                                        Success.classList.add('d-none');

                                    }, 2000);

                                }

                            }))
                        })

                    })
                })
            }
        })
    }
    else {
        const emptyList = document.querySelector('#txtNaN');

        btnResp.forEach(btn => {
            btn.addEventListener('click', () => {

                emptyList.classList.remove('d-flex');
                emptyList.classList.add('d-none');

                respBox.classList.remove('d-none');
                respBox.classList.add('d-flex');

            })
        })
    }

    voltar.forEach(btnVoltar => {
        btnVoltar.addEventListener('click', desativarDiv);
    })
    // o GPT disse que voce pode usar data-target(HTML) pra nao ter essa repeticao

    function desativarDiv(event) {
        const btn = event.target.closest('button');
        if (!btn) return;

        if (btn.classList.contains('Detalhes')) {
            detalhes.classList.remove('d-flex');
            detalhes.classList.add('d-none');
        }
        else if (btn.classList.contains('Responder')) {
            respBox.classList.remove('d-flex');
            respBox.classList.add('d-none');
        }
        else if (btn.classList.contains('Excluir')) {
            Excluir.classList.remove('d-flex');
            Excluir.classList.add('d-none');
        }

        forms.forEach(list => {
            list.classList.remove('d-none', 'h-0');
            list.classList.add('d-flex');
            list.style.opacity = '1';
        });
    }
} catch (error) {
    console.log('erro 3434 ->', error);
}