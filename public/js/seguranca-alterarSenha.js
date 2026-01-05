const btn = document.querySelector('[name = "btnAlterarSenha"]');
const cancelar = document.querySelector('[name = "btnCancelarAlterarSenha"]');
const inputs = document.querySelectorAll('input.item');

btn.addEventListener('click', () => {

    const Dados = { btnAlterarSenha: true };

    inputs.forEach(input => {
        Dados[input.name] = input.value;
    });

    $.ajax({
        type: "POST",
        url: "?pagina=perfil",
        data: Dados,
        success: function (response) {
            console.log(response);
            console.log(Dados);
        },
        error: function (err) {
            console.error('Erro AJAX:', err);
        }
    });
});

cancelar.addEventListener('click', () => {

});