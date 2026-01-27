<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>
<?php include_once __DIR__ . '/../layouts/BarraNav.php'; ?>

<!-- obs pra pegar altura de imagens de acordo com a IA:
 $info = getimagesize($_FILES['imagem']['tmp_name']);

if ($info !== false) {
    $altura = $info[1];
}  -->

<div id="Content" class="d-flex flex-column w-100 p-1 overflow-auto">

    <div class="d-flex gap-2 w-100 h-100 overflow-hidden">
        <form name="txtFiltro" action="" method="POST"
            class="d-flex flex-column w-25 h-75 p-5 gap-3 bg-content border border-dark rounded-4 border-dark">
            <button type="submit" name="btnFiltro"
                class="d-flex justify-content-between text-white fw-bold btn bg-DarkGray text-start menu-btn">Todos
                os
                Produtos <p>(156)</p></button>
            <button type="submit" name="btnFiltro"
                class="d-flex justify-content-between text-white fw-bold btn text-start menu-btn">Eletrônicos <p>
                    (156)</p></button>
            <button type="submit" name="btnFiltro"
                class="d-flex justify-content-between text-white fw-bold btn text-start menu-btn">Gaming <p>(156)
                </p></button>
            <button type="submit" name="btnFiltro"
                class="d-flex justify-content-between text-white fw-bold btn text-start menu-btn">Moda <p>(156)
                </p></button>
            <button type="submit" name="btnFiltro"
                class="d-flex justify-content-between text-white fw-bold btn text-start menu-btn">Casa &
                Decoração <p>(156)</p></button>
            <button type="submit" name="btnFiltro"
                class="d-flex justify-content-between text-white fw-bold btn text-start menu-btn">Esportes <p>
                    (156)</p></button>

            <p class="text-white fw-bold">Faixa de Preço</p>
            <span class="d-flex gap-2 w-100">
                <input class="form-control bg-transparent border-secondary" type="number" name="" id=""
                    placeholder="Min">
                <input class="form-control bg-transparent border-secondary" type="number" name="" id=""
                    placeholder="Max">
            </span>
        </form>
        <div class="d-flex flex-column align-items-start gap-3 w-75 h-100">
            <div class="d-flex justify-content-between w-100 p-3 border border-dark rounded-3" style="heigth: 25%;">
                <span class="d-flex gap-2 w-75 h-100 content-center">
                    <i class="fa-solid fa-magnifying-glass fs-3 text-white"></i>
                    <input class="rounded-2 bg-content border-secondary w-90 p-2 text-white" type="text" name="" id="">
                </span>
                <i class="fa-solid fa-list fs-3 text-white"></i>
            </div>
            <?php include_once dirname(__DIR__) . '/../model/function-limitarPalavras.php'; ?>
            <div
                class="d-flex flex-column w-100 h-90 p-3 gap-3 bg-content border border-dark rounded-4 border-dark overflow-auto">
                <form method="POST" id="txtForm"
                    class="d-flex flex-row flex-wrap gap-1 rounded-2 border-dark position-relative">
                    <?php include_once __DIR__ . '/../../model/produtosLista.php'; ?>

                    <?php foreach ($produtos as $lista): ?>
                        <div class="card-produto bg-content glow-hover text-white p-1">
                            <img class="card-img" src="<?= $lista['caminho_arquivo'] ?>" alt="">
                            <button type="button" class="btnEnviar btn text-white h-40">
                                <span class="text-center w-100 h-50">
                                    <p><?= limitarPalavras($lista['nome'], 3) ?></p>
                                    <p>R$ <?= $lista['preco'] ?></p>
                                </span>
                            </button>
                            <input type="hidden" name="DataProd" value='<?= json_encode($lista) ?>'>
                        </div>
                    <?php endforeach; ?>
                </form>


                <div id="detalhesId" class="d-flex flex-row h-100 w-100 position-relative">
                    <div class="d-flex align-items-start">
                        <button id="btnVoltar" class="btn fw-bold fs-1">
                            <i class="fa-solid fa-circle-chevron-left fs-1"></i>
                        </button>
                    </div>
                    <div class="d-flex flex-column gap-2 w-75 h-100">
                        <span class="d-flex w-100">

                            <div class="d-flex justify-content-between mt-5 flex-column w-10 h-75 m-4">
                                <?php foreach ($ImgAlt as $Alt):?>
                                    <img class="glow-hover" id="ImgAlt" src="<?php echo $Alt['caminho_arquivo']?>" alt="erro">
                                <?php endforeach; ?>
                                
                            </div>

                            <img id="imgProd" class="w-75 h-100 object-fit-contain" src="" alt="imagem nao encontrada">
                        </span>
                        <h3 class="text-white fw-bold p-3 border-bottom border-white w-75">DESCRIÇÃO</h3>
                        <p id="txtDesc" class="text-white p-3 w-50"></p>
                        <p id="txtCaract" class="text-white p-3 w-50">Caracteristicas:<br></p>
                    </div>
                    <div class="d-flex flex-column w-25 h-100">
                        <h4 id="txtNome" class="text-white fw-bold p-3 border-bottom border-white fs-5">Guitarra
                            elétrica</h4>
                        <h3 id="txtPreco" class="text-white fw-bold p-3"></h3>
                        <button class=" text-white fw-bold btn bg-DarkGray m-2 glow-hover">Comprar
                            Agora</button>
                        <button class=" text-white fw-bold btn bg-DarkGray m-2 glow-hover">Adicionar ao
                            Carrinho</button>
                        <div
                            class="d-flex flex-column gap-2 p-3 mt-3 w-100 h-100 bg-content border border-dark rounded-3">
                            <p class="text-white fw-bold fs-4">OPINIÕES DE OUTROS USUARIOS</p>
                            <div class="d-flex flex-column overflow-auto">
                                <div class="rounded-3 bg-content border border-dark p-3 w-90 h-40 text-white">
                                    Visualmente linda, e o som é tão versátil que consigo usar do rock ao jazz.
                                    A
                                    alavanca
                                    responde super bem também.
                                </div>
                                <div class="rounded-3 bg-content border border-dark p-3 w-90 h-40 text-white">
                                    Visualmente linda, e o som é tão versátil que consigo usar do rock ao jazz.
                                    A
                                    alavanca
                                    responde super bem também.
                                </div>
                                <div class="rounded-3 bg-content border border-dark p-3 w-90 h-40 text-white">
                                    Visualmente linda, e o som é tão versátil que consigo usar do rock ao jazz.
                                    A
                                    alavanca
                                    responde super bem também.
                                </div>
                                <div class="rounded-3 bg-content border border-dark p-3 w-90 h-40 text-white">
                                    Visualmente linda, e o som é tão versátil que consigo usar do rock ao jazz.
                                    A
                                    alavanca
                                    responde super bem também.
                                </div>
                                <div class="rounded-3 bg-content border border-dark p-3 w-90 h-40 text-white">
                                    Visualmente linda, e o som é tão versátil que consigo usar do rock ao jazz.
                                    A
                                    alavanca
                                    responde super bem também.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <script src="../public/js/produtos-detalhes.js"></script>
            </div>
        </div>
    </div>
</div>
</body>

</html>