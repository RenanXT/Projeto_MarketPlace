<?php

session_start();

include_once __DIR__ . '/../../config/dataBase.php';
$pagina = $_GET['pagina'] ?? 'sair';

if (isset($_POST['btnLogin'])) {
    include_once dirname(__DIR__) . '/model/login.php';

}
if (isset($_POST['btnCadastrar'])) {
    include_once dirname(__DIR__) . '/view/pages/cadastrar.php';
    exit;
}
if (isset($_POST['btnCriarConta'])) {
    include_once __DIR__ . '/../model/Cadastrar.php';
}
if (!empty($_SESSION['usuarioSession'])) {
    $Usuario = $_SESSION['usuarioSession'];
    $ID = $_SESSION['usuarioSession']['id_usuario'];
    $NomeUser = $_SESSION['usuarioSession']['nome_social'];
    $EmailUser = $_SESSION['usuarioSession']['email'];

    $Enderecos = $Usuario['enderecos'];
    
    if (isset($_POST['btnResponder'])) {
        include_once __DIR__ . '/../app/model/notificacoesConsulta.php';
    }
    if (isset($_POST['btnAlterarSenha'])) {
        include_once __DIR__ . '/../../app/model/AlterarSenha.php';
        exit;
    }
    if (isset($_POST['btnAtualizarDados'])) {
        include_once __DIR__ . '/../../app/model/editarDadosPerfil.php';
        exit;
    }
    if (isset($_POST['newBtnId'])) {
        include_once __DIR__ . '/../../app/model/adicionarEndereco.php';
        exit;
    }
    if (isset($_POST['btnAlterarStatus'])){
          include_once __DIR__ . '/../../app/model/AlterarVisibilidade.php';
    }
    // BarraNav
    try {
        switch ($pagina) {

            case 'inicio':
                include_once __DIR__ . '/../../app/view/pages/inicio.php';
                break;
            case 'carrinho':
                include_once __DIR__ . '/../../app/view/pages/carrinho.php';
                break;
            case 'produtos':
                include_once __DIR__ . '/../../app/view/pages/produtos.php';
                break;
            case 'perfil':
                include_once __DIR__ . '/../../app/view/pages/perfil.php';
                break;
            case 'notificacoes':
                include_once __DIR__ . '/../../app/view/pages/notificacoes.php';

                break;
            // vou fazer o suporte ainda
            case 'sair':
                include_once __DIR__ . '/../../app/view/pages/login.php';
                session_destroy();
                break;
        }
    } catch (PDOException $e) {
        echo '[ERRO] barraNav-> ' . $e . '';
    }
} else {
    include_once __DIR__ . '/../../app/view/pages/login.php';
}


?>