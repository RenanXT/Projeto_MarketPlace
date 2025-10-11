<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>
<?php include_once __DIR__ . '/../layouts/BarraNav.php'; ?>
<div id="Content" class="d-flex flex-column w-100 p-1 overflow-auto">

    <div class="d-flex gap-2 w-100 h-100 overflow-hidden">
        <div class="d-flex flex-column w-25 h-75 p-5 gap-3 bg-content border border-dark rounded-4 border-dark">
            <span class="d-flex w-100 gap-2">
                <i class="fa-solid fa-magnifying-glass m-auto fs-2 text-white"></i>
                <input class="form-control bg-transparent border-secondary m-auto text-white" type="tetx">
            </span>
            <button class="d-flex justify-content-between text-white fw-bold btn bg-DarkGray text-start menu-btn">Todos
                os
                Produtos <p>(156)</p></button>
            <button class="d-flex justify-content-between text-white fw-bold btn text-start menu-btn">Eletrônicos <p>
                    (156)</p></button>
            <button class="d-flex justify-content-between text-white fw-bold btn text-start menu-btn">Gaming <p>(156)
                </p></button>
            <button class="d-flex justify-content-between text-white fw-bold btn text-start menu-btn">Moda <p>(156)
                </p></button>
            <button class="d-flex justify-content-between text-white fw-bold btn text-start menu-btn">Casa &
                Decoração <p>(156)</p></button>
            <button class="d-flex justify-content-between text-white fw-bold btn text-start menu-btn">Esportes <p>
                    (156)</p></button>

            <p class="text-white fw-bold">Faixa de Preço</p>
            <span class="d-flex gap-2 w-100">
                <input class="form-control bg-transparent border-secondary" type="number" name="" id=""
                    placeholder="Min">
                <input class="form-control bg-transparent border-secondary" type="number" name="" id=""
                    placeholder="Max">
            </span>
        </div>
        <div class="d-flex flex-column align-items-start gap-3 w-75 h-100">
            <div class="d-flex justify-content-between w-100 p-3 border border-dark rounded-3" style="heigth: 25%;">
                <span class="d-flex gap-2 w-75 h-100 content-center">
                    <i class="fa-solid fa-magnifying-glass fs-3 text-white"></i>
                    <input class="rounded-2 bg-content border-secondary w-90 p-2 text-white" type="text" name="" id="">
                </span>
                <i class="fa-solid fa-list fs-3 text-white"></i>
            </div>
            <div
                class="d-flex flex-column w-100 h-90 p-3 gap-3 bg-content border border-dark rounded-4 border-dark overflow-auto">
                <form method="POST" id="txtForm" class="d-flex flex-row flex-wrap gap-1 rounded-2 border-dark">
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
                    <?php
                    for ($i = 0; $i < 15; $i++) {
                        echo '<div class="card-produto bg-content glow-hover text-white p-2">
            <img class="card-img" src="../public/img/solar.png" alt="">
            <button class="btn text-white h-50">
            <span class="text-center w-100 h-50"><p>' . limitarPalavras('Guitarra Solar ab6c.4 Preto fosco', 4) . '</p>
            <p>R$ 2599,99</p></span>
            </button>
        </div>
        <div class="card-produto bg-content glow-hover text-white p-2">
            <img class="card-img" src="../public/img/wallpaper-dark.jpg" alt="">
            <button class="btn text-white h-50">
            <span class="text-center w-100 h-50"><p>' . limitarPalavras('Guitarra Solar ab6c.4 Preto fosco', 4) . '</p>
            <p>R$ 2599,99</p></span>
            </button>
        </div>';
                    }
                    ?>
                </form>

                <div id="detalhesId" class="d-flex flex-row h-100 w-100 position-relative">
                    <button id="btnVoltar" class="position-absolute btn text-white fw-bold fs-1" style="top: -10px;">
                        < </button>
                            <div class="d-flex flex-column w-75 h-100">
                                <img src="<?php echo '../public/img/solar.png'; ?>" alt="">
                                <h3 class="text-white fw-bold p-3 border-bottom border-white w-75">DESCRIÇÃO</h3>
                                <p class="text-white p-3 w-50">
                                    Desfrute com a guitarra Solar da conexão com a música. Com este instrumento você vai
                                    descobrir novos acordes, cantar suas canções e curtirá da vida musical. Explore,
                                    amplifique
                                    sua criatividade e desenvolva a sua paixão.

                                    Uma forma para cada estilo musical
                                    Esta guitarra Solar Type A é fabricada com os mais altos padrões possíveis que
                                    garantem um
                                    excelente instrumento e interpretação incomparável. Além disso, sua estética faz
                                    este
                                    produto brilhar, com acabamentos muito cuidados, cores vibrantes e atraentes.

                                    Material versátil
                                    Sua madeira de mogno a torna num produto versátil e popular. O tom é marcado pela
                                    afeição e
                                    o equilíbrio, com agudos suaves e nuances harmônicas carregadas.</p>
                                <p class="text-white p-3 w-50">Caracteristicas:<br>
                                    Tipo de madeira do corpo: Mogno.<br>
                                    Acabamento do corpo: Fosco.<br>
                                    Material do diapasão: Ébano.<br>
                                    Orientação da mão: Destro.<br>
                                    Feita em mogno com acabamento de fosco.<br>
                                    Com 6 cordas e 24 trastes de tamanho jumbo.<br>
                                    O comprimento da escala é de 647.7 mm.<br>
                                    A ponte é tremolo.<br>
                                    Inclui 2 microfones humbucker.<br>
                                    Controles de chave seletora de captadores.<br>
                                    Alavanca incluída.</p>
                            </div>
                            <div class="d-flex flex-column w-25 h-100">
                                <h4 class="text-white fw-bold p-3 border-bottom border-white fs-5">Guitarra elétrica
                                    Solar
                                    A2.6FR lemon neon fosco</h4>
                                <h3 class="text-white fw-bold p-3">R$ 8.490</h3>
                                <div
                                    class="d-flex flex-column gap-2 p-2 w-100 h-100 bg-content border border-dark rounded-3">
                                    <h4 class="text-white fw-bold">OPINIÕES</h4>
                                    <p class="text-white">Deixe Um Comentario</p>
                                    <input class="bg-transparent border border-dark rounded-2 p-2 w-90 text-white mb-5"
                                        type="text" name="" id="">
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
                <script src="../public/js/detalhes.js"></script>
            </div>
        </div>
    </div>
</div>
</body>

</html>