<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>
<?php include_once __DIR__ . '/../layouts/BarraNav.php';
?>

<div id="Content" class="d-flex flex-column w-100 gap-3 p-2 overflow-auto">
    <div class="container-fluid w-100 mb-4">
        <div
            class="d-flex flex-column bg-content gap-2 align-items-center justify-content-between p-2 m-2 shadow rounded-5 w-100">
            <form class="d-flex w-100 m-auto" method="POST" action="">
                <i class="fa-solid fa-magnifying-glass text-white fs-3 p-2"></i>
                <input id="searchBar" class="form-control w-90 border-0 bg-transparent h-100 m-auto text-white"
                    placeholder="Search Anything">
                <span>
                    <button class="btn"><i class="fa-solid fa-circle-user fw-bold fs-3 m-1 text-white"></i></button>
                </span>
            </form>
        </div>
        <div class="row">
            <div class="col-9">
                <img class="w-100 h-100 p-2" src="<?php echo '../public/img/paint.png'; ?>" alt="">
            </div>
            <div class="col-3 mt-3">
                <div class="d-flex flex-column border border-dark w-100 glow-hover">
                    <img class="w-100 h-60 p-1" src="<?php echo '/' . $Usuario['banner']; ?>" alt="">
                    <div class="d-flex flex-column w-100 h-40 content-center p-3 bg-DarkGray">
                        <i class="fa-solid fa-circle-user fs-1 text-white"></i>
                        <h2 class="text-start text-white"><?php echo $Usuario['nome_social']; ?></h2>
                        <h5 class="text-start text-secondary mb-4">#
                            <?php echo str_pad($Usuario['id_usuario'], 3, "0", STR_PAD_LEFT); ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <?php
        function limitarPalavras($texto, $limite)
        {
            $palavras = explode(" ", $texto);
            if (count($palavras) > $limite) {
                return implode(" ", array_slice($palavras, 0, $limite)) . "...";
            }
            return $texto;
        }
        ?>
    </div>
    <!-- teste 2 -->
    <?php include_once __DIR__ . '/../../model/produtosLista.php'; ?>
    <div class="d-flex m-auto flex-wrap w-100">
        <h3 class="text-center m-auto text-white fw-bold p-5 m-4 w-100 border-top">PRODUTOS EM DESTAQUE</h3>
        <p class="w-100 text-end text-white fw-bold m-auto">Ver Mais</p>

        <div class="d-flex flex-wrap content-center gap-2 w-100 p-1">
            <?php
            foreach ($produtos as $lista) {
                if ($lista['avaliacao'] >= 4) {
                    echo '
    <div class="card-produto bg-content glow-hover text-white p-2">
        <img class="card-img" src="'.$lista['caminho_arquivo'].'" alt="">
        <span class="text-center w-100 h-50">
            <p>' . limitarPalavras($lista['nome'], 4) . '</p>
            <p>R$ '.$lista['preco'].'</p>
        </span>
    </div>';
                }
            }
            ?>

        </div>

    </div>

    <div class="d-flex justify-content-between gap-2 m-auto h-25" style="z-index:1;">


        <div class="d-flex bg-content rounded-4 border border-dark p-1 text-white h-100">
            <i class="fa-solid fa-star-half fs-1 m-3"></i>
            <span class="d-flex flex-column m-2">
                <p class="fw-bold">18</p>
                <p class="fw-bold">Avaliações feitas</p>
            </span>
        </div>
        <div class="d-flex bg-content rounded-4 border border-dark p-1 text-white h-100">
            <i class="fa-solid fa-money-check fs-1 m-3"></i>
            <span class="d-flex flex-column m-2">
                <p class="fw-bold">5</p>
                <p class="fw-bold">Compras realizadas</p>
            </span>
        </div>
        <div class="d-flex bg-content rounded-4 border border-dark p-1 text-white h-100">
        <i class="fa-solid fa-heart fs-1 m-3"></i>
            <span class="d-flex flex-column m-2">
                <p class="fw-bold">45</p>
                <p class="fw-bold">Marcados como favoritos</p>
            </span>
        </div>

    </div>
    <div class="container-fluid w-100 mt-5">
        <div class="row bg-content border border-dark">
            <div class="col-5 overflow-hidden">
                <div class="w-75 overflow-hidden" style="transform: rotate(20deg);">
                    <img src="<?php echo '../public/img/Perifricos_gamer.jpg'; ?>" alt="">
                </div>
            </div>
            <div class="col-7">
                <div class="d-flex flex-column content-center gap-2 p-3 w-100 h-100">
                    <h1 class="text-silver fw-bold text-start w-100 m-2">CADASTRE SUA LOJA NO SITE</h1>
                    <h2 class="text-silver fw-bold text-start w-100 m-2">ADICIONE SEUS PRODUTOS NO NOSSO CATALOGO E
                        EXPANDA SUAS VENDAS </h2>
                    <div id="logoLoop" class="d-flex gap-2 w-100 m-4 overflow-hidden">
                        <?php
                        for ($i = 0; $i < 10; $i++) {
                            echo '<img src="../public/img/logoLojas.png" alt="">';
                        }
                        ?>
                    </div>
                    <h4 class="text-silver text-start w-100 m-2">Crie sua conta e descrubra as vantagens</h4>
                    <div class="d-flex flex-row flex-wrap gap-2 w-100">
                        <button
                            class="btn bg-DarkGray border-dark text-white fw-bold glow-hover m-2 p-2 rounded-3 w-25 h-auto">ENTRAR</button>
                        <button
                            class="btn bg-DarkGray border-dark text-white fw-bold glow-hover m-2 p-2 rounded-3 w-25 h-auto">CRIAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>