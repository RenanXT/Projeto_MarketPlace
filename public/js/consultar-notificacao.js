const divConsulta = document.querySelector('div#txtConsulta');
const btnList = divConsulta.querySelectorAll('button');

btnList.forEach(btn => {
    const value = btn.textContent;
    btn.addEventListener('click', () => {
        consultarTipo(value);
    }
    )
})

function consultarTipo(value) {
    console.log(value);
    
    const Dados = { value, btnResponder : true } 

    $.ajax({
        type: "POST",
        url: "index.php?pagina=notificacoes",
        data: Dados,
        success: function (response) {
            
        }
    });
}

