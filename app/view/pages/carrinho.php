<?php include_once __DIR__ . '/../layouts/html_header.php'; ?>
<?php include_once __DIR__ . '/../layouts/BarraNav.php'; ?>
<div class="d-flex flex-wrap gap-3 w-100 h-100 p-1 m-5">
    <span class="d-flex flex-column w-100">
        <h2 class="text-white fw-bold"><i class="fa-solid fa-cart-shopping text-white"></i> CARRINHO</h2>
        <p class="text-white fw-bold">3 itens no seu carrinho</p>
    </span>
    <div class="d-flex flex-column bg-content rounded-3 border border-dark w-75 h-75 rounded-2 overflow-auto">

        <?php
        for ($i = 0; $i < 15; $i++) {
            echo ' <div class="d-flex justify-content-between align-items-center w-100  border-dark border-bottom"
            style=" height: 15%;">
            <div class="d-flex w-50 h-100">
                <img class="m-4 h-75 object-contain rounded-2" src="../public/img/Perifricos_gamer.jpg" alt="">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="text-white fw-bold">Teclado e mouse Led Gamer Pc + Headset</h4>
                    <h5 class="text-success fw-bold">$ 165,99</h5>
                </div>
            </div>
            <div class="d-flex gap-4 align-items-center h-100 m-3">
                <input class="bg-transparent border border-dark rounded-2 p-2 w-20 text-white text-center" type="number" name="" id="">
                <button class="btn bg-DarkGray border-dark p-3 text-white fw-bold glow-hover">COMPRAR AGORA</button>
            </div>
        </div>';
        }
        ?>
    </div>
    <div class="d-flex flex-column w-20 h-50 bg-content border border-dark rounded-3 p-3">
        <h4 class="text-white fw-bold mb-5">Resumo do Pedido</h4>
        <span class="d-flex justify-content-between w-100 text-white">
            <p>Produto</p>
            <p>$ 2755,00</p>
        </span>
        <span class="d-flex justify-content-between w-100 text-white">
            <p>Frete</p>
            <p>$ 24,54</p>
        </span>
        <div class="d-flex flex-column w-100 p-3 border-top border-secondary">
            <span class="d-flex justify-content-between w-100 text-white">
                <p>TOTAL</p>
                <p>$ 2779,54</p>
            </span>
            <div class="d-flex bg-blueIndigo rounded-2 gap-2 text-center w-100 p-2">
                <i class="fa-solid fa-shield text-white fw-bold"></i>
                <p class="text-white fw-bold">Compra 100% Protegida</p>
            </div>
            <button class="btn bg-DarkGray p-3 text-white fw-bold m-3  glow-hover">FINALIZAR COMPRA</button>

        </div>

    </div>
</div>