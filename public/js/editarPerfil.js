try {
    const container = document.querySelector('div#Id_perfil');
    const div = container.querySelectorAll('div.item');

    div.forEach(box => {
        box.addEventListener('click', functionCallback);

    })

    function functionCallback() {
        const box = this;
        const button = box.querySelectorAll('button.btnAtualizarDados');
        const input = box.querySelectorAll('input');

        desativarDivs(div);
        ativarDiv(input, button, box);

        input.forEach(inp => {
            inp.addEventListener('click', e => {
                e.stopPropagation();
            });
        });

        button.forEach(btn => {
            btn.addEventListener('click', e => {
                e.stopPropagation();
            });
        });

        button.forEach(btn => {

            // o codigo tava duplicando alguns eventos 
            // entoa mexi no listener dos botões
            if (btn.dataset.listener) return;
            btn.dataset.listener = 'true';

            if (btn.id === 'btnDadosPerfil') {
                btn.addEventListener('click', () => {
                    atualizarDados(input);
                });

            } else if (btn.id === 'AdicionarEnd') {
                btn.addEventListener('click', () => {
                    adiconarElementos(input);
                });

            } else if (btn.id === 'btnDadosEnd') {
                btn.addEventListener('click', () => {
                    editarEndereco(input);
                });
            }
        });
    }


    function ativarDiv(input, button, box) {
        box.classList.add('glow-hover');
        button.forEach(btn => {
            btn.disabled = false;
            btn.classList.remove('text-secondary');
            btn.classList.add('text-white');
        })
        input.forEach(inp => {
            inp.disabled = false;
            inp.classList.remove('text-secondary');
            inp.classList.add('text-white');

            // guardei o valor antigo do input logo quando ativa a div
            inp.dataset.oldValue = inp.value;
        })
        const valores = [];

        input.forEach(i => {
            valores.push(i.dataset.oldValue);
        });

    }

    function desativarDivs(div) {
        // nao sei porque mas nao consigo passar button e input como parametro,
        // entao tive que repetir o querySelector
        div.forEach(box => {
            box.classList.remove('glow-hover');

            box.querySelectorAll('button.btnAtualizarDados')
                .forEach(btn => {
                    btn.disabled = true;
                    btn.classList.remove('text-white');
                    btn.classList.add('text-secondary');
                });

            box.querySelectorAll('input')
                .forEach(inp => {
                    inp.disabled = true;
                    inp.classList.remove('text-white');
                    inp.classList.add('text-secondary');
                });
        });

    }
    // funcoes principais

    function atualizarDados(input) {

        let Dados = { btnAtualizarDados: true };

        input.forEach(inp => {
            Dados[inp.id] = inp.value;
        });

        console.log(Dados);

        $.ajax({
            method: "POST",
            url: "?pagina=perfil",
            data: Dados,
            success: function (response) {
                console.log(response)
                const Sucesso = document.querySelector('div#successID');
                Sucesso.classList.remove('d-none');
                Sucesso.classList.add('d-flex');
                setTimeout(() => {
                    Sucesso.classList.remove('d-flex');
                    Sucesso.classList.add('d-none');
                }, 2000)
                console.log(Dados)

            }
        });
    };

    function editarEndereco(input) {

        input.forEach(i => {
            // comparei os valores atuais com os antigos
            if (i.value !== i.dataset.oldValue) {
                // criei separadores na string e transformei em obj
                const partes = i.value.split(/\s*[,\-\/!]\s*/).map(p => p.trim());
                const endereco = {
                    btnAtualizarDados: true,
                    rua: partes[0],
                    numero: partes[1],
                    bairro: partes[2],
                    cidade: partes[3],
                    id_endereco: partes[4]
                };
                console.log(endereco)

                $.ajax({
                    method: "POST",
                    url: "?pagina=perfil",
                    data: endereco,
                    success: function (response) {
                        console.log(response)
                        const Sucesso = document.querySelector('div#successID');
                        Sucesso.classList.remove('d-none');
                        Sucesso.classList.add('d-flex');
                        setTimeout(() => {
                            Sucesso.classList.remove('d-flex');
                            Sucesso.classList.add('d-none');
                        }, 2000)
                    }
                })

            }
        });


    }

    function adiconarElementos(input) {

        // criando novo input

        const ultimo = input[input.length - 1];
        const novoInput = ultimo.cloneNode(true);

        const contador = input.length;

        novoInput.id = `txtEnd${contador}`;
        novoInput.classList.add('novoInput');

        novoInput.value = '';

        ultimo.parentNode.appendChild(novoInput);

        // criando botao Add

        const btnNovoInput = document.querySelector('button#AdicionarEnd');
        const btnAdd = document.createElement('button');
        btnAdd.id = 'newBtnId';
        ultimo.parentNode.appendChild(btnAdd);

        btnAdd.className = btnNovoInput.className;
        btnAdd.textContent = 'Adicionar Novo Endereço';

        btnAdd.addEventListener('click', () => {
            adicionarEndereco();
        })

    }

    function adicionarEndereco() {

        // organizando os dados para envio do ajax

        const enderecoValue = document.querySelector('input.novoInput');
        const partes = enderecoValue.value.split(/\s*[,\-\/!]\s*/).map(p => p.trim());

        const Dados = {
            newBtnId: true,
            rua: partes[0],
            numero: partes[1],
            bairro: partes[2],
            cidade: partes[3],
            id_endereco: partes[4]
        }
        console.log(Dados);

        $.ajax({
            method: "POST",
            url: "?pagina=perfil",
            data: Dados,
            success: function (response) {
                console.log(response);
            }
        })
        // de novo, o codigo funciona mas so tem efeito quando o usuario refaz o login 
        // por causa da session! 


    }
} catch (error) {
    console.log('[ERRO] -> ', error)
}
