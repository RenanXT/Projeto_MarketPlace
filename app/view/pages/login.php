<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>

<body id="divLogin">
    <div class="d-flex flex-row w-100 vh-100">
        <div class="dataLogin hidden-login d-flex flex-column border border-secondary rounded-2 w-40 
                    align-items-center justify-content-center">

            <form class="d-flex flex-column justify-content-center gap-5 h-50 w-75" method="POST" action="">
                <h1 class="text-light fw-bold">Entrar</h1>
                <label class="text-light fw-bold">Usuario:</label>
                <input name="txtUsuario" class="form-control text-light bg-transparent rounded-2 w-75">
                <label class="text-light fw-bold">Senha:</label>
                <input name="txtSenha" type="password" class="form-control text-light bg-transparent rounded-2 w-75">

                <a name="resetPassword" class="text-light fw-bold text-decoration-none">Esqueci minha senha?</a>
                <button type="submit" name="btnLogin" class="btn btn-transparent border-light w-50"><a class="text-white fw-bold text-decoration-none">Entrar</a></button>
                <a class="text-light fw-bold text-decoration-none">Não tem uma
                    conta?<button type="submit" name="btnCadastrar" class="btn text-white fw-bold">Cadastre-se aqui</button></a>

            </form>

        </div>
    </div>
    <script src="../public/js/login-load.js"></script>

</body>

</html>