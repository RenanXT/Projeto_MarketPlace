<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>
<?php include_once __DIR__ . '/../layouts/BarraNav.php'; ?>

<div class="d-flex flex-column align-items-start m-5 w-100 h-100">
    <div class="d-flex flex-column w-100">
        <h2 class="fw-bold text-white"><i class="fa-regular fa-user text-white"></i> Seus Dados</h2>
        <p class="fw-bold text-white">Gerencie sua conta e personalize sua experiência</p>
    </div>
    <div class="layout justify-content-between w-100 h-100">
        <div class="configAction gap-2 content-center bg-content border-2 border border-dark h-50 p-3 rounded-4">
            <button class="menu-btn" id="perfil"><i class="fa-solid fa-user"></i>
                <p>PERFIL</p>
            </button>
            <button class="menu-btn" id="atividade"><i class="fa-solid fa-list-check"></i>
                <p>ATIVIDADE</p>
            </button>
            <button class="menu-btn" id="notificacao"><i class="fa-solid fa-bell"></i>
                <p>NOTIFICAÇÕES</p>
            </button>
            <button class="menu-btn" id="pagamento"><i class="fa-solid fa-credit-card"></i>
                <p>PAGAMENTO</p>
            </button>
            <button class="menu-btn" id="seguranca"><i class="fa-solid fa-lock"></i>
                <p>SEGURANÇA</p>
            </button>
            <button class="menu-btn" id="tema"><i class="fa-solid fa-palette"></i>
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
                <div id="Id_perfil" class="tagID d-flex flex-column">
                    <h2 class="text-white fw-bold mb-5border-white border-bottom p-2">SEUS DADOS</h2>
                    <div class="item d-flex flex-column w-90 p-5 m-2 gap-2 bg-content border border-dark rounded-3">
                        <form class="FormId" action="" method="POST">
                            <div class="d-flex flex-wrap w-100 gap-3" method="POST" action="">
                                <input type="text" name="" id=""
                                    class="form-control border border-secondary bg-transparent text-secondary fw-bold w-75"
                                    value="E-Mail:Nome: <?php echo $Usuario['nome'] . ' ' . $Usuario['sobrenome']; ?>"
                                    disabled>
                                <button class="btnAtualizar btn bg-DarkGray text-secondary fw-bold glow-hover"
                                    type="button" disabled>Atualizar</button>
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
                                <button class="btnAtualizar btn bg-DarkGray text-secondary fw-bold glow-hover"
                                    type="button" disabled>+</button>
                                <button class="btnAtualizar btn bg-DarkGray text-secondary fw-bold w-25  glow-hover"
                                    type="button" disabled>Editar</button>
                            </span>
                        </form>
                    </div>
                </div>

                <!-- div ATIVIDADE -->
                <div id="Id_atividade" class="tagID d-none">
                    <h3>ATIVIDADES RECENTES</h3>
                </div>

                <!-- div NOTIFICAÇÃO -->
                <div id="Id_notificacao" class="tagID d-none flex-row flex-wrap gap-2 w-100 h-100">

                    <h2 class="w-100 p-3 text-white fw-bold border-bottom border-secondary">CONFIGURAR NOTIFICAÇÕES</h2>
                    <p class="text-white m-2 fs-5 w-75">Escolha as notificações que quer receber por push ou e-mail.
                        Essas preferências só se aplicam a esses casos.</p>

                    <!-- LISTA ESQUERDA -->
                    <div class="d-flex flex-column gap-2 w-75 h-100 m-4">

                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                            <h4 class="text-white fw-bold w-100">Atualizações do Pagamento</h4>
                            <p class="text-white fs-5">Aviso sobre a última atualização do estado de pagamento das
                                compras</p>
                            <button class="btn border border-secondary rounded btn-toggle"><i
                                    class="fa-solid fa-check d-flex text-white"></i></button>
                        </div>

                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                            <h4 class="text-white fw-bold w-100">Descontos e Promoções</h4>
                            <p class="text-white fs-5">Aviso sobre as promoçoes mais vistas e de seu interrese</p>
                            <button class="btn border border-secondary rounded btn-toggle"><i
                                    class="fa-solid fa-check d-flex text-white"></i></button>
                        </div>

                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                            <h4 class="text-white fw-bold w-100">Mensagens Gerais</h4>
                            <p class="text-white fs-5">Aviso sobre mensagens do sistema ou de outros usaurios enviadas
                                para você</p>
                            <button class="btn border border-secondary rounded btn-toggle"><i
                                    class="fa-solid fa-check d-flex text-white"></i></button>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                            <h4 class="text-white fw-bold w-100">Status das Compras</h4>
                            <p class="text-white fs-5">Aviso sobre o status das entregas de suas compras</p>
                            <button class="btn border border-secondary rounded btn-toggle"><i
                                    class="fa-solid fa-check d-flex text-white"></i></button>
                        </div>
                    </div>
                </div>

                <!-- div ATIVIDADE -->
                <div id="Id_pagamento" class="tagID d-none flex-column">
                    <h3 class="text-white border-bottom border-secondary w-100 p-2">CARTÕES</h3>

                    <div class="d-flex flex-column w-75 m-2 p-2 bg-content rounded-3 border border-secondary">
                        <div class="d-flex flex-row justify-content-between align-items-start w-100">
                            <img class="w-40 p-3" src="../public/img/mastercard.png" alt="Imagem não encontrada">
                            <button class="btn m-3 p-3"><i
                                    class="fa-solid fa-arrow-rotate-right text-white fw-bold fs-3"></i>
                            </button>
                        </div>
                        <div class="item">
                            <label>Numero do cartão: </label>
                            <P>**** **** *** 8926</P>
                        </div>
                        <div class="item">
                            <label>CVV: </label>
                            <p>***</p>
                        </div>
                        <div class="item">
                            <label>VENCIMENTO: </label>
                            <p>03/29</p>
                        </div>
                        <div class="item">
                            <label>Titular: </label>
                            <p>RENAN BARROS MENDEL DE PAULA</p>
                        </div>
                    </div>

                    <button class="btn bg-DarkGray text-white fw-bold w-25 glow-hover m-2 p-2">
                        ADICIONAR CARTÃO
                    </button>
                </div>

                <!-- div ATIVIDADE -->
                <div id="Id_seguranca" class="tagID d-none flex-column w-90">
                    <h3 class="text-white fw-bold w-100 border-bottom border-secondary p-2 mb-5">SEGURANÇA</h3>
                    <button class="btn d-flex justify-content-between align-items-center w-75">
                        <p class="m-2 fs-5 text-white"><i class="fa-regular fa-id-card"></i>
                            Alterar Senha</p>
                            <i class="fa-solid fa-angle-right m-2 fs-5 text-white"></i>
                    </button>
                     <button class="btn d-flex justify-content-between align-items-center w-75">
                        <p class="m-2 fs-5 text-white"><i class="fa-solid fa-user"></i></i>
                            Privacidade Da Conta</p>
                            <i class="fa-solid fa-angle-right m-2 fs-5 text-white"></i>
                    </button>
                     <button class="btn d-flex justify-content-between align-items-center w-75">
                        <p class="m-2 fs-5 text-white"><i class="fa-solid fa-lock"></i>
                            Metodos de Login</p>
                            <i class="fa-solid fa-angle-right m-2 fs-5 text-white"></i>
                    </button>
                     <button class="btn d-flex justify-content-between align-items-center w-75">
                        <p class="m-2 fs-5 text-white"><i class="fa-solid fa-shield"></i>
                           Autenticação em Duas Etapas</p>
                            <i class="fa-solid fa-angle-right m-2 fs-5 text-white"></i>
                    </button>
                     <button class="btn d-flex justify-content-between align-items-center w-75">
                        <p class="m-2 fs-5 text-white"><i class="fa-solid fa-right-to-bracket"></i>
                           Sair</p>
                            <i class="fa-solid fa-angle-right m-2 fs-5 text-white"></i>
                    </button>
                </div>

            </div>
            <script src="../public/js/perfil-Perfil.js"></script>
            <script src="../public/js/perfil-editarDados.js"></script>



        </div><!-- fim do container principal -->


    </div>
</div>
</div>
</div>
<!---->

</div>

</body>

</html>