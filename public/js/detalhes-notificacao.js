

// <-----------------------------  Funcoes detalhes  -----------------------------> 

try {
    const FormDados = document.querySelectorAll('form#txtMsg');
    const btnDetalhes = document.querySelectorAll('button.btnData');
    const detalhes = document.querySelector('div#txtDetalhes');

    btnDetalhes.forEach(btn => {
        btn.addEventListener('click', () => {

            function ativarDiv() {

                FormDados.forEach(form => {
                    form.classList.remove('d-flex');
                    form.classList.add('d-none');
                })

                detalhes.classList.remove('d-none');
                detalhes.classList.add('d-flex');
            }
            ativarDiv();

            const Dados = JSON.parse(document.querySelector('input.txtDados').value);

            const assunto = document.querySelector('h3#txtAssunto');
            const dadosR = document.querySelector('p#txtDadosR');
            const emailLoja = document.querySelector('p#txtEmailLoja');
            const user = document.querySelector('p#txtUser');
            const msg = document.querySelector('p#txtMsg');
            assunto.textContent = Dados.assunto;
            dadosR.textContent = Dados.nome;
            emailLoja.textContent = Dados.email;
            msg.textContent = Dados.mensagem;
            console.log(Dados);


        });
    });





    // <-----------------------------  Funcoes resposta  -----------------------------> 



    const btnResp = document.querySelectorAll('button.btnResponder');
    btnResp.forEach(btn => {
        btn.addEventListener('click', ativarResp);
    });

    function ativarResp() {

        detalhes.classList.remove('d-flex');
        detalhes.classList.add('d-none');

        if (FormDados.length > 0) {
            FormDados.forEach(form => {
                form.classList.remove('d-flex');
                form.classList.add('d-none');
            });
        }

        const divResp = document.querySelector('div#divResp');
        divResp.classList.remove('d-none');
        divResp.classList.add('d-flex');
    }

} catch (error) {
    console.log('[erro] -> -> ->', error)
}