
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

    })
    button.forEach(btn => {
        if (btn.id == 'btnDadosPerfil') {
            btn.addEventListener('click', () => {
                atualizarDados(input)
            });

        } else if (btn.id == 'AdicionarEnd') {
            btn.addEventListener('click', () => {
                adicionarEndereco(input);
            });
        } else if (btn.id == 'btnDadosEnd') {
            btn.addEventListener('click', () => {
                editarEndereco(input);
            });

        }
    })
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
    // nao sei porque mas nao consigo passar button e input como parametro 
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
            const partes = i.value.split(/[,-]/).map(p => p.trim());
            const endereco = {
                btnAtualizarDados: true,
                rua: partes[0],
                numero: partes[1],
                bairro: partes[2],
                cidade: partes[3]
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

function adicionarEndereco(valores) {
    if (valores.lenght < 2) {
        // executa o insert
    }
}
