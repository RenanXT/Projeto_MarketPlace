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
            <div class="d-flex gap-2 border  border-secondary rounded-2 bg-content p-2"
                style="margin-right: 20px;">
                <button class="btn bg-DarkGray text-white glow-hover"><i class="fa-solid fa-plus"></i></button>
                <button class="btn bg-DarkGray text-white glow-hover">Todas (21)</button>
                <button class="btn bg-DarkGray text-white glow-hover">Lidas (13)</button>
                <button class="btn bg-DarkGray text-white glow-hover">Arquivadas (3)</button>
            </div>
        </div>
        <button class="btn bg-DarkGray text-white fw-bold p-2 m-3 w-40 border border-dark glow-hover fw-bold">MARCAR TODAS COMO LIDAS</button>

        <div
            class="d-flex flex-column gap-2 w-90 h-100 bg-content border  border-secondary rounded-3 overflow-auto mt-5">
            <?php
            for ($i = 0; $i < 12; $i++) {
                echo ' <div id="txtMsg" class="d-flex w-100 p-3 border justify-content-between align-items-center border-secondary">
                <span class="d-flex gap-2">
                    <button class="btn border-secondary glow-hover"><i class="fa-solid fa-check text-white fw-bold p-2"></i></button>

                    <button class="d-flex content-center gap-2 btn">
                        <p class="text-white fw-bold m-auto">RyukXT</p>
                        <p class="text-white fw-bold m-auto"> - </p>
                        <p class="text-white fw-bold m-auto">Pagamento Confirmado</p>
                    </button>
                </span>
                <span class="d-flex gap-4">
                    <button class="btn"><i class="fa-solid fa-share fs-3 text-white"></i></button>
                    <button class="btn"><i class="fa-solid fa-folder fs-3 text-white"></i></button>
                    <button class="btn"><i class="fa-solid fa-trash fs-3 text-white"></i></button>
                </span>


            </div>';
            }
            ?>

        </div>
    </div>

</body>