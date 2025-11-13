// const form = document.querySelector('form#txtMsg');
// // const check = form.querySelector('button#btnStatus');
// // const remetente = form.querySelector('p#txtRemetente');
// // const assunto = form.querySelector('p#txtAssunto');
// const btn = form.querySelector('button#btnData');

// try {

//   btn.forEach(btn => {
//         btn.addEventListener('click', () => {
//             const input = form.querySelector('input#txtDados');
//             const dados = new FormData();
//             dados.append('DataProd', input.value);

//             $.ajax({
//                 url: 'index.php?pagina=notificacoes',
//                 method: 'POST',
//                 data: dados,
//                 processData: false,
//                 contentType: false,
//                 success: function (response) {
//                     alert('enviou');
//                     console.log(response);
//                 }
//             });

//         });
//     });

// } catch (error) {
//     console.log('[ERRO] ->', error.message);
// }

// Pega todos os formulários com o id txtMsg
const forms = document.querySelectorAll('form#txtMsg');
const detalhes = document.querySelector('div#txtDetalhes');

const voltar = document.querySelector('button#btnVoltar');
const responder = document.querySelector('button#btnResponder');
const excluir = document.querySelector('button#btnExcluir');

detalhes.style.display = 'none';


forms.forEach(form => {
    const btn = form.querySelector('button#btnData');

    if (btn) {
        btn.addEventListener('click', (event) => {
            event.preventDefault(); // impede o envio padrão do form

            const input = form.querySelector('input#txtDados');
            const dados = new FormData();
            dados.append('DataProd', input.value);

            $.ajax({
                url: 'index.php?pagina=notificacoes',
                method: 'POST',
                data: dados,
                processData: false,
                contentType: false,
                success: function (response) {

                    try {
                        setTimeout(() => {

                            forms.forEach(form => {
                                form.classList.remove('d-flex');
                                form.style.display = 'none';
                            });
                            detalhes.style.display = 'flex';
                        }, 300);

                    } catch (error) {
                        console.log('[ERRO] ->', error);
                    };
                    const assunto = document.querySelector('h3#txtAssunto');
                    const dadosRemetente = document.querySelector('p#txtDadosR');
                    const DadosUsuario = document.querySelector('p#txtUser');
                    const Msg = document.querySelector('p#txtMsg');
                    const jsonData = dados.get('DataProd');

                    // transforma o texto em objeto JavaScript
                    const info = JSON.parse(jsonData);

                    // agora sim você pode acessar normalmente:
                    assunto.textContent = info.assunto;
                    dadosRemetente.textContent = info.remetente;
                    DadosUsuario.textContent = info.destinatario;
                    Msg.textContent = info.mensagem;


                },
                error: function (xhr, status, error) {
                    console.error('[ERRO AJAX] ->', error);
                }
            });
        });
    }
});

voltar.addEventListener('click', voltarLista);

function voltarLista() {
    try {
        setTimeout(() => {

            forms.forEach(form => {
                form.style.display = 'flex';
            });
            detalhes.style.display = 'none';
        }, 300);

    } catch (error) {
        console.log('[ERRO] ->', error);
    };
}
