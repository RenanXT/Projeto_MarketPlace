<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>
<?php include_once __DIR__ . '/../layouts/BarraNav.php'; ?>

<div class="d-flex flex-column align-items-start m-5 w-100 h-100">
    <div class="d-flex flex-column w-100">
        <h2 class="fw-bold text-white"><i class="fa-regular fa-user text-white"></i> Seus Dados</h2>
        <p class="fw-bold text-white">Gerencie sua conta e personalize sua experiência</p>
    </div>
    <div class="layout justify-content-between w-100 h-100">
        <div class="configAction gap-2 content-center bg-content border-2 border border-dark h-50 p-3 rounded-4">
            <button class="menu-btn" style="background: linear-gradient(to bottom, #000000ff, #383838ff);"><i
                    class="fa-solid fa-user"></i>
                <p>PERFIL</p>
            </button>
            <button class="menu-btn"><i class="fa-solid fa-list-check"></i>
                <p>ATIVIDADE</p>
            </button>
            <button class="menu-btn"><i class="fa-solid fa-bell"></i>
                <p>NOTIFICAÇÕES</p>
            </button>
            <button class="menu-btn"><i class="fa-solid fa-credit-card"></i>
                <p>PAGAMENTO</p>
            </button>
            <button class="menu-btn"><i class="fa-solid fa-lock"></i>
                <p>SEGURANÇA</p>
            </button>
            <button class="menu-btn"><i class="fa-solid fa-palette"></i>
                <p>TEMA</p>
            </button>
        </div>

        <div class="d-flex flex-wrap align-items-start w-75 h-100">
            <div id="divPerfil" class="d-flex flex-row border border-dark w-100 glow-hover"
                style="background-image: url(<?php echo '/' . $Usuario['banner'] . ''; ?>);">
                <div class="d-flex flex-row w-100 h-40 align-items-start p-1">
                    <i class="fa-solid fa-circle-user fs-xxl text-white"></i>
                    <i class="fa-solid fa-camera text-dark fs-5 mt-auto position-absolute top-50" style="z-index:2"></i>
                    <span class="d-flex flex-column w-30 m-2">
                        <h2 class="text-white">
                            <?php echo $Usuario['nome_social']; ?>
                        </h2>
                        <h5 class="text-secondary">
                            <?php echo str_pad($Usuario['id_usuario'], 3, "0", STR_PAD_LEFT); ?>
                        </h5>
                        <h5 class="text-secondary">
                            <i class="fa-solid fa-star fs-5"></i> Avaliado Como Um Bom Usúario
                        </h5>
                    </span>
                </div>
            </div>
            <div
                class="divDados d-flex flex-column bg-content m-3 p-4 border border-2 border-dark h-75 w-90 rounded-3 overflow-auto">
                <h2 class="text-white fw-bold mb-5border-white border-bottom p-2">SEUS DADOS</h2>
                <div class="item d-flex flex-column w-90 p-5 m-2 gap-2 bg-content border border-dark rounded-3">
                    <form class="FormId" action="" method="POST">
                        <div class="d-flex flex-wrap w-100 gap-3" method="POST" action="">
                            <input type="text" name="" id=""
                                class="form-control border border-secondary bg-transparent text-secondary fw-bold w-75"
                                value="E-Mail:Nome: <?php echo $Usuario['nome'] . ' ' . $Usuario['sobrenome']; ?>"
                                disabled>
                            <button class="btnAtualizar btn bg-DarkGray text-secondary fw-bold glow-hover" type="button"
                                disabled>Atualizar</button>
                            <input type="text" name="" id=""
                                class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                                value="E-Mail: <?php echo $Usuario['email']; ?>" disabled>
                            <input type="text" name="" id=""
                                class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                                value="Apelido: <?php echo $Usuario['nome_social']; ?>" disabled>
                            <input type="text" name="" id=""
                                class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                                value="CPF/CNPJ: <?php echo $Usuario['cpf_cnpj']; ?>" disabled>
                            <input type="text" name="" id=""
                                class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                                value="Telefone: <?php echo $Usuario['telefone']; ?>" disabled>
                        </div>
                    </form>
                </div>
                <h2 class="text-white fw-bold mb-5border-white border-bottom p-2">ENDEREÇOS</h2>

                <div class="item d-flex flex-column w-90 p-5 gap-3 m-2 bg-content border border-dark rounded-3">
                    <form class="FormId" action="" method="POST">
                        <input type="text" name="" id=""
                            class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                            value="Endereço 1: Coronel Pedro Marcondes, 34 - Flamboyant" disabled>
                        <input type="text" name="" id=""
                            class="form-control border border-secondary bg-transparent text-secondary fw-bold w-40"
                            value="Endereço 1: Coronel Pedro Marcondes, 34 - Flamboyant" disabled>
                        <span class="d-flex gap-2 mt-2">
                            <button class="btnAtualizar btn bg-DarkGray text-secondary fw-bold glow-hover" type="button"
                                disabled>+</button>
                            <button class="btnAtualizar btn bg-DarkGray text-secondary fw-bold w-25  glow-hover" type="button"
                                disabled>Editar</button>
                        </span>
                    </form>
                </div>
                <script src="../public/js/perfil-editarDados.js"></script>
            </div>
        </div>
    </div>
</div>
<!---->

</div>

</body>

</html>