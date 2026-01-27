const forms = document.querySelectorAll('form[id^="form_"]') ?? '';


function controller(forms) {

    forms.forEach(form => {
        const id = form.id.replace('form_', '');

        const btnStatus = document.querySelectorAll(`button#btnStatus_${id}`);

        console.log(btnStatus)

        btnStatus.forEach(btn => {
            btn.addEventListener('click', () => {
                alterarVisibilidade(btn, id)
            });

        })
    })

}

function alterarVisibilidade(btn, id) {
    let icone = btn.querySelector('i');

    let status = '';

    if (icone.classList.contains('d-none') && icone.classList.contains('fa-check')) {
        icone.classList.remove('d-none');
        icone.classList.add('d-flex');
        status = 'lida';
    }
    
    else if (icone.classList.contains('fa-folder')) {
        status = 'arquivada';
        
    } else {
        icone.classList.remove('d-flex');
        icone.classList.add('d-none');
    }

    let Dados = { status, id, btnAlterarStatus: true }

    console.log(Dados);

    $.ajax({
        type: "POST",
        url: "index.php?pagina=notificacoes",
        data: Dados,
        success: function (response) {
            console.log(response)

        }
    });
}


controller(forms)