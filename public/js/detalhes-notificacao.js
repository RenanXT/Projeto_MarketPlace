

// <-----------------------------  Funcoes detalhes  -----------------------------> 

try {
    const FormDados = document.querySelectorAll('form#txtMsg');
    const detalhes = document.querySelector('div#txtDetalhes');

   const btns = document.querySelectorAll('.btnData');

btns.forEach(btn => {

    btn.addEventListener('click', () => {
        
        const id = btn.id.split('_')[1]; 

        const json = JSON.parse(document.getElementById(`dados_${id}`).value);

        document.getElementById("txtAssunto").textContent = json.assunto;
        document.getElementById("txtDadosR").textContent = json.nome;
        document.getElementById("txtEmailLoja").textContent = json.email;
        document.getElementById("txtMsg").textContent = json.mensagem;
        
        document.getElementById("txtDetalhes").classList.remove('d-none');
        document.getElementById("txtDetalhes").classList.add('d-flex');

        document.querySelectorAll('form[id^="form_"]').forEach(f => {
            f.classList.add('d-none');
        });

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