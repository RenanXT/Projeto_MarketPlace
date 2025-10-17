<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>

<body>
    <div class="d-flex flex-row justify-content-start align-items-start w-100 vh-100">
        <button type="submit" class="btn">
            <a href="index.php?pagina=sair"><i class="fa-solid fa-circle-chevron-left text-white fs-1"></i></a>
        </button>
        <div class="d-flex flex-column bg-content border border-secondary rounded-2 w-40 h-75 p-3 m-auto
                    align-items-end">
            <form class="d-flex flex-column gap-3 h-100 w-90" method="POST" action="">
                <h1 class="text-light fw-bold p-3">Criar Conta</h1>
                <div class="d-flex flex-column gap-2 w-100 h-100 overflow-auto">

                    <label class="text-light fw-bold">Nome:</label>
                    <input name="txtNome" type="text" class="form-control text-light bg-transparent rounded-2 w-75">

                    <label class="text-light fw-bold">Sobrenome:</label>
                    <input name="txtSobrenome" type="text"
                        class="form-control text-light bg-transparent rounded-2 w-75">

                    <label class="text-light fw-bold">Nome Social:</label>
                    <input name="txtNomeSocial" type="text"
                        class="form-control text-light bg-transparent rounded-2 w-75">

                    <label class="text-light fw-bold">Gênero:</label>
                    <input name="txtGenero" type="text" class="form-control text-light bg-transparent rounded-2 w-75">

                    <label class="text-light fw-bold">Telefone:</label>
                    <input name="txtTelefone" type="text" class="form-control text-light bg-transparent rounded-2 w-75">

                    <label class="text-light fw-bold">CPF / CNPJ:</label>
                    <input name="txtCpfCnpj" type="text" class="form-control text-light bg-transparent rounded-2 w-75">

                    <label class="text-light fw-bold">Data de Nascimento:</label>
                    <input name="txtDataNascimento" type="date"
                        class="form-control text-light bg-transparent rounded-2 w-75">

                    <label class="text-light fw-bold">Email:</label>
                    <input name="txtEmail" type="email" class="form-control text-light bg-transparent rounded-2 w-75">

                    <label class="text-light fw-bold">Usuário:</label>
                    <input name="txtUsuario" type="text" class="form-control text-light bg-transparent rounded-2 w-75">

                    <label class="text-light fw-bold">Senha:</label>
                    <input name="txtSenha" type="password" class="form-control text-light bg-transparent rounded-2 w-75">
                </div>
                <button type="submit" name="btnCriarConta" class="btn btn-transparent border-light w-50 mt-5 mb-2"><a
                        class="text-white fw-bold text-decoration-none">Entrar</a></button>
            </form>

        </div>
    </div>

</body>

</html>