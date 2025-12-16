try {
    const forms = document.querySelectorAll('form[id^="form_"]');
    const Excluir = document.querySelector('div#divExcluir');

    if (forms.length > 0) {
        console.log('exlcuir log->  ', forms);

        forms.forEach(form => {
            const id = form.id.replace('form_', '');

            const jsonString = document.querySelector(`input#dados_${id}`).value;
            const Dados = JSON.parse(jsonString);

            const btn = form.querySelector(`button#btnApagar_${id}`);
            btn.addEventListener('click', () => {
                forms.forEach(item => {
                    item.classList.remove('d-flex')
                    item.classList.add('d-none')
                })

                Excluir.classList.remove('d-none')
                Excluir.classList.add('d-flex')
                console.log(Dados)


                document.querySelector('p#txtAssunto').innerHTML = Dados.assunto;
                document.querySelector('textarea#txtMsg').value = Dados.mensagem;


                const btnDrop = document.querySelector('button#btnDrop');
                const btnBack = document.querySelector('button#btnBack');

                btnDrop.addEventListener('click', ExcluirDados)
                function ExcluirDados() {
                    $.ajax(({
                        url: '/../Projeto_MarketPlace/app/model/excluirNotificacao.php',
                        method: 'POST',
                        data: Dados,
                        success: function (response) {
                            console.log(response);
                            const btn = document.querySelector('button#btnSuccess');

                            $('#btnDropAlert')
                                .fadeIn(300)
                                .delay(2000)
                                .fadeOut(300);
                        }
                    }))
                }

            })

        })
    }
} catch (error) {
    console.log('[ERRO] exlcuir notificacao ->', error)
}