<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>
<?php include_once __DIR__ . '/../layouts/BarraNav.php'; ?>

<body>

    <div class="d-flex flex-column p-3 w-100 h-100">

        <div class="d-flex flex-column gap-2 w-100 p-3">
            <span class="d-flex w-100">
                <i class="fa-regular fa-bell fs-1 text-white"></i>
                <h1 class="text-white fw-bold fs-1">NOTIFICAÇÕES</h1>
            </span>
            <p class="text-white fs-4">Você Tem 2 Notificações não lidas</p>
        </div>
        <div class="d-flex flex-wrap gap-3 w-100 justify-content-between">
            <input class="border border-secondary bg-content w-50 rounded-3" type="text" name="" id="">
            <div class="d-flex gap-2 border  border-secondary rounded-2 bg-content p-2" style="margin-right: 20px;">
                <button class="btn bg-DarkGray text-white glow-hover"><i class="fa-solid fa-plus"></i></button>
                <button class="btn bg-DarkGray text-white glow-hover">Todas (21)</button>
                <button class="btn bg-DarkGray text-white glow-hover">Lidas (13)</button>
                <button class="btn bg-DarkGray text-white glow-hover">Arquivadas (3)</button>
            </div>
        </div>

        <?php include_once __DIR__ . '/../../model/notificacoesConsulta.php'; ?>

        <button class="btn bg-DarkGray text-white fw-bold p-2 m-3 w-40 border border-dark glow-hover fw-bold">MARCAR
            TODAS COMO LIDAS</button>

        <div
            class="d-flex flex-column gap-2 w-90 h-100 bg-content border  border-secondary rounded-3 overflow-auto mt-5">
            <?php if (!empty($dados)) {
                foreach ($dados as $noticacoes):
                    ?>
                    <form action="" method="POST" id="txtMsg"
                        class="d-flex w-100 p-3 border justify-content-between align-items-center border-secondary">
                        <span class="d-flex gap-2">
                            <button type="button" class="btn border-secondary glow-hover" id="btnStatus"><i
                                    class="fa-solid fa-check text-white fw-bold p-2"></i></button>

                            <button type="button" id="btnData" class="d-flex content-center gap-2 btn">
                                <p id="txtRemetente" class="text-white fw-bold m-auto">
                                    <?php echo '#00' . $noticacoes['destinatario'] . ' RyukXT'; ?>
                                </p>
                                <p class="text-white fw-bold m-auto"> - </p>
                                <p id="txtAssunto" class="text-white fw-bold m-auto"><?php echo $noticacoes['assunto']; ?></p>
                            </button>
                        </span>
                        <span class="d-flex gap-4">
                            <button id="txtResponder" type="button" class="btn"><i
                                    class="fa-solid fa-share fs-3 text-white"></i></button>
                            <button id="txtArquivar" type="button" class="btn"><i
                                    class="fa-solid fa-folder fs-3 text-white"></i></button>
                            <button id="txtApagar" type="button" class="btn"><i
                                    class="fa-solid fa-trash fs-3 text-white"></i></button>
                            <input type="hidden" id="txtDados" value='<?= json_encode($noticacoes) ?>'>
                        </span>

                    </form>

                <?php endforeach;
            } else {
                echo '<div class="d-flex content-center h-100 p-3"> 
                    <button class="d-flex gap-2 btn">
                        <p class="text-white">Nenhuma Notificação Encontrada</p>
                        <i class="fa-solid fa-arrow-rotate-right text-white fs-4"></i>
                    </button> 
                    </div>';
            }
            ?>

            <div id="txtDetalhes" class=" flex-column content-center w-100 gap-2">
                <h3 id="txtAssunto" class="fw-bold text-white border-bottom
                           border-secondary w-90 mt-5 p-2 text-uppercase">
                    assunto
                </h3>
                <div class="d-flex flex-row justify-content-start w-90 gap-2 p-2">
                    <button type="button" id="btnVoltar" class="btn"><i
                            class="fa-solid fa-arrow-left text-white fs-3"></i></button>
                    <button type="button" id="btnResponder" class="btn"><i
                            class="fa-solid fa-paper-plane text-white fs-3"></i></button>
                    <button type="button" id="btnExcluir" class="btn"><i
                            class="fa-solid fa-trash text-white fs-3"></i></button>
                </div>
                <div class="d-flex flex-column p-3 w-90">
                    <p id="txtDadosR" class="text-white">Guest barrosrenan164@gmail.com</p>
                    <p id="txtUser" class="text-white mb-3">Para: RyukXT</p>

                    <p class="text-white">Mensagem:</p>
                    <p id="txtMsg" class="text-white"></p>
                </div>

            </div>


            <div id="divResp" class="d-none flex-column w-90 h-90 p-3 ">
                <span class="d-flex align-items-center gap-2 mb-3">
                    <button id="btnvoltarLista" class="btn" style="max-width:10%; min-width:5%">
                    <i class="fa-solid fa-arrow-left text-white fs-3"></i></button>
                </button>
                <h3 class="fw-bold text-white mt-auto">RESPONDER NOTIFICACÃO</h3>
                </span>
                <div class="d-flex flex-column gap-2 w-75 p-2 m-auto">
                    <div class="d-flex align-items-center gap-4 w-50">
                        <p class="fw-bold text-white">De:</p>
                        <p class="fw-bold text-white"> RyukXT</p>
                        <p class="fw-bold text-white"> decryuk@gmail.com</p>
                    </div>
                    <div class="d-flex align-items-center gap-4 w-50">
                        <p class="fw-bold text-white">Para:</p>
                        <p class="fw-bold text-white"> Guest</p>
                    </div>
                    <div class="d-flex align-items-center gap-3 w-75">
                        <p class="fw-bold text-white m-auto">Assunto:</p>
                        <input class="form-control bg-transparent border-secondary text-white"></input>
                    </div>
                </div>

                <div class="flex-column w-75 p-2 m-auto">
                    <h3 class="fw-bold text-white">Mensagem:</h3>
                    <textarea class="form-control bg-transparent border-secondary text-white" id="" class="w-100"
                        style="height: 300px;"></textarea>
                </div>
            </div>


        </div>
        <script src="../public/js/detalhes-notificacao.js"></script>
        <script src="../public/js/responder-notificacao.js"></script>

    </div>

</body>