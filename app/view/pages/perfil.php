<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>
<?php include_once __DIR__ . '/../layouts/BarraNav.php'; ?>

<div class="d-flex flex-column align-items-start m-5 w-100 h-100">
    <div class="d-flex flex-column w-100">
        <h2 class="fw-bold text-white"><i class="fa-regular fa-user text-white"></i> Seus Dados</h2>
        <p class="fw-bold text-white">Gerencie sua conta e personalize sua experiência</p>
    </div>
    <div class="layout justify-content-between w-100 h-100">
        <div
            class="configAction gap-2 content-center bg-content border-2 border border-dark h-50 p-2 rounded-4">
            <button class="menu-btn"><i class="fa-solid fa-list-check"></i>
                <p>ATIVIDADE</p>
            </button>
            <button class="menu-btn" style="background: linear-gradient(to bottom, #000000ff, #383838ff);"><i class="fa-solid fa-user"></i>
                <p>PERFIL</p>
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
            <div id="divPerfil" class="d-flex flex-row border border-dark w-100 glow-hover">
                <div class="d-flex flex-row w-100 h-40 align-items-start p-1">
                    <i class="fa-solid fa-circle-user fs-xxl text-white"></i>
                    <i class="fa-solid fa-camera text-dark fs-5 mt-auto position-absolute top-50" style="z-index:2"></i>
                    <span class="d-flex flex-column w-30 m-2">
                        <h2 class="text-white">RyukXT</h2>
                        <h5 class="text-secondary">#000645</h5>
                        <h5 class="text-secondary">
                            <i class="fa-solid fa-star fs-5"></i> Avaliado Como Um Bom Usúario
                        </h5>
                    </span>
                </div>
            </div>
            <div class="d-flex flex-column bg-content m-3 p-4 border border-2 border-dark h-75 w-90 rounded-3">
                <h2 class="text-white fw-bold mb-5border-white border-bottom p-2">SEUS DADOS</h2>
                <div class="d-flex flex-column w-100 p-5">
                    <span class="d-flex w-100 justify-content-between">
                        <p class="text-white fw-bold">Nome: Renan Barros Mendel De Paula</p>
                        <p class="text-white fw-bold">Atualizar</p>
                    </span>
                    <p class="text-white fw-bold">E-Mail: decryuk@gmail.com</p>
                    <p class="text-white fw-bold">Apelido: RyukXT</p>
                    <p class="text-white fw-bold">CPF/CNPJ: 555.462.598.45</p>
                    <p class="text-white fw-bold">Endereço 1: Coronel Pedro Marcondes, 34 - Flamboyant</p>
                    <p class="text-white fw-bold">Telefone: (12) 98222-4143</p>



                </div>
            </div>
        </div>
    </div>
</div>
<!---->

</div>

</body>

</html>