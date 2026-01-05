<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>
<?php include_once __DIR__ . '/../layouts/BarraNav.php'; ?>

<div class="d-flex flex-column align-items-start m-5 w-100 h-100">
    <div class="d-flex flex-column w-100">
        <h2 class="fw-bold text-white"><i class="fa-regular fa-user text-white"></i> Seus Dados</h2>
        <p class="fw-bold text-white">Gerencie sua conta e personalize sua experiência</p>
    </div>
    <div class="layout justify-content-between w-100 h-100">
        <div class="configAction gap-2 content-center bg-content border-2 border border-dark h-50 p-3 rounded-4">
            <button class="menu-btn glow-hover" id="perfil"><i class="fa-solid fa-user"></i>
                <p>PERFIL</p>
            </button>
            <button class="menu-btn glow-hover" id="atividade"><i class="fa-solid fa-list-check"></i>
                <p>ATIVIDADE</p>
            </button>
            <button class="menu-btn glow-hover" id="notificacao"><i class="fa-solid fa-bell"></i>
                <p>NOTIFICAÇÕES</p>
            </button>
            <button class="menu-btn glow-hover" id="pagamento"><i class="fa-solid fa-credit-card"></i>
                <p>PAGAMENTO</p>
            </button>
            <button class="menu-btn glow-hover" id="seguranca"><i class="fa-solid fa-lock"></i>
                <p>SEGURANÇA</p>
            </button>
            <button class="menu-btn glow-hover" id="tema"><i class="fa-solid fa-palette"></i>
                <p>TEMA</p>
            </button>
        </div>

        <div class="d-flex flex-wrap align-items-start w-75 h-100">
            <div id="divBanner" class="d-flex flex-row border border-dark w-100 glow-hover"
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
               
                <?php include_once __DIR__ . '/../pages/perfil-Perfil.php'?> 
                <?php include_once __DIR__ . '/../pages/perfil-Atividade.php'?> 
                <?php include_once __DIR__ . '/../pages/perfil-Notificacoes.php'?> 
                <?php include_once __DIR__ . '/../pages/perfil-Pagamento.php'?> 
                <?php include_once __DIR__ . '/../pages/perfil-Seguranca.php'?> 

            </div>
            <script src="../public/js/perfil-editarDados.js"></script>
            <script src="../public/js/editarPerfil.js"></script>
            <script src="../public/js/seguranca-alterarSenha.js"></script>



        </div><!-- fim do container principal -->


    </div>
</div>
</div>
</div>
<!---->

</div>

</body>

</html>