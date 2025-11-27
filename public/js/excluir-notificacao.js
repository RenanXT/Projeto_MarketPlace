try {
    const fomrs = document.querySelectorAll('form[id^="form_"]');
    const Excluir = document.querySelector('div#divExcluir');

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
                console.log('ok')
                $.ajax(({
                    // cria o arquivo de excluir pra continuar com o ajax
                }))
            }

        })

    })
} catch (error) {
    console.log('[ERRO] exlcuir notificacao ->', error)
}