<div id="Id_seguranca" class="tagID d-none flex-column w-90">
    <h3 class="text-white fw-bold w-100 border-bottom border-secondary p-2 mb-5">SEGURANÇA</h3>
    <button id="Alterar" class="menu-btn glow-hover btn d-flex justify-content-between align-items-center w-75">
        <p class="m-2 fs-5 text-white"><i class="fa-solid fa-key"></i>
            Alterar Senha</p>
        <i class="fa-solid fa-angle-right m-2 fs-5 text-white"></i>
    </button>
    <button id="Privacidade" class="menu-btn glow-hover btn d-flex justify-content-between align-items-center w-75">
        <p class="m-2 fs-5 text-white"><i class="fa-solid fa-user"></i></i>
            Privacidade Da Conta</p>
        <i class="fa-solid fa-angle-right m-2 fs-5 text-white"></i>
    </button>
    <button id="Metodos" class="menu-btn glow-hover btn d-flex justify-content-between align-items-center w-75">
        <p class="m-2 fs-5 text-white"><i class="fa-solid fa-lock"></i>
            Metodos de Login</p>
        <i class="fa-solid fa-angle-right m-2 fs-5 text-white"></i>
    </button>
    <button id="Autenticacao" class="menu-btn glow-hover btn d-flex justify-content-between align-items-center w-75">
        <p class="m-2 fs-5 text-white"><i class="fa-regular fa-id-card"></i>
            Autenticação em Duas Etapas</p>
        <i class="fa-solid fa-angle-right m-2 fs-5 text-white"></i>
    </button>
    <button id="Desconectar" class="menu-btn glow-hover btn d-flex justify-content-between align-items-center w-75">
        <p class="m-2 fs-5 text-white"><i class="fa-solid fa-right-to-bracket"></i>
            Sair</p>
        <i class="fa-solid fa-angle-right m-2 fs-5 text-white"></i>
    </button>
</div>

<div id="Id_Alterar" class="tagID d-none flex-column p-3 w-100">
    <h3 class="text-white fw-bold p-2">Alterar Senha</h3>
    <p class="text-white p-2 mb-5">(Ao aleterar a senha, para entrar no site, você precisara de refazer o login na sua
        conta)</p>

    <div class="d-flex flex-column gap-1">
        <label class="d-flex text-white">Senha Atual<p class="text-danger"> *</p></label>
        <input name="txtAtual" class="item form-control bg-transparent text-white border-secondary w-50">

        <label class="d-flex text-white">Nova Senha<p class="text-danger"> *</p></label>
        <input name="txtNova" class="item form-control bg-transparent text-white border-secondary w-50">

        <label class="d-flex text-white">Confirmar Senha<p class="text-danger"> *</p></label>
        <input name="txtConfirmar" class="item form-control bg-transparent text-white border-secondary w-50">

        <span class="d-flex gap-3 mt-5">
            <button name="btnAlterarSenha" class="btn bg-DarkGray glow-hover p-2 text-white w-25">Alterar</button>
            <button name="btnCancelarAlterarSenha" class="btn bg-DarkGray glow-hover p-2 text-white w-25">Cancelar</button>
            
        </span>
    </div>
</div>
