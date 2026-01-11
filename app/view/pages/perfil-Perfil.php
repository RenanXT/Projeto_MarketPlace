<div id="Id_perfil" class="tagID d-flex flex-column">
    <h2 class="text-white fw-bold mb-3 border-white border-bottom p-2">SEUS DADOS</h2>

    <div id="successID" class="d-none position-relative w-100 border-bottom border-secondary mb-4">
        <h5 class="position-absolute d-flex justify-content-between align-items-center 
               bg-DarkGray text-white p-3 rounded-3 glow-hover"
            style="top: 100%; left: 50%; transform: translateX(-50%); z-index: 1050;">
            Sucesso
            <button id="cancelarSuccessID" class="btn btn-sm text-white">X</button>
        </h5>
    </div>

    <div class="item d-flex flex-column w-90 p-5 m-2 gap-2 bg-content border border-dark rounded-3">
        <form class="FormId d-flex flex-row" action="" method="POST">
            <div class="d-flex flex-wrap w-90 gap-3" method="POST" action="">
                <input type="text" id="txtNome"
                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                    value="<?php echo $Usuario['nome']; ?>" disabled>
                <input type="text" id="txtSobrenome"
                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                    value="<?php echo $Usuario['sobrenome']; ?>" disabled>
                <input type="text" id="txtEmail"
                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                    value="<?php echo $Usuario['email']; ?>" disabled>
                <input type="text" id="txtApelido"
                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                    value="<?php echo $Usuario['nome_social']; ?>" disabled>
                <input type="text" id="txtCPF"
                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                    value="<?php echo $Usuario['cpf_cnpj']; ?>" disabled>
                <input type="text" id="txtTelefone"
                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                    value="<?php echo $Usuario['telefone']; ?>" disabled>
                <input type="text" id="txtNascimento"
                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                    value="<?php echo $Usuario['data_nascimento']; ?>" disabled>
            </div>
            <button id="btnDadosPerfil" class="btnAtualizarDados btn bg-DarkGray text-secondary fw-bold glow-hover h-20"
                type="button" disabled>Atualizar</button>
        </form>
    </div>
    <h2 class="text-white fw-bold mb-3 border-white border-bottom p-2">ENDEREÇOS</h2>

    <div class="item d-flex flex-column w-90 p-5 gap-3 m-2 bg-content border border-dark rounded-3">
        <form class="FormId d-flex flex-column gap-3" action="" method="POST"></form>
        <?php foreach ($Enderecos as $i => $end): ?>
            <input type="text" id="txtEnd<?= $i ?>"
                class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                value="<?= $end['rua'] ?>, <?= $end['numero'] ?> - <?= $end['bairro'] ?> / <?= $end['cidade'] . ' ! ' . $end['id_endereco'] ?>" disabled>
        <?php endforeach; ?>

        <span class="d-flex gap-2 mt-2">
            <button id="AdicionarEnd" class="btnAtualizarDados btn bg-DarkGray text-secondary fw-bold glow-hover"
                type="button" disabled>+</button>
            <button id="btnDadosEnd" class="btnAtualizarDados btn bg-DarkGray text-secondary fw-bold w-25  glow-hover"
                type="button" disabled>Editar</button>
        </span>
        </form>
    </div>
</div>