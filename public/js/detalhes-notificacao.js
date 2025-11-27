const forms = document.querySelectorAll('form[id^="form_"]');
const detalhes = document.querySelector('div#txtDetalhes');

forms.forEach(form => {
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

        const btnResp = document.querySelectorAll('button.btnResponder')



        btnResp.forEach(btn => {

            const respBox = document.querySelector('div#divResp');

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