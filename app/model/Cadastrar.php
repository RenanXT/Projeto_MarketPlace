<?php

include_once __DIR__ . '/Usuario.php';

try {
    $user = new Usuario($conexao);
    $NovoUsuario = $user->cadastrarUsuario();
        header('header("Location: index.php?pagina=sair");');
        exit;
    }
 catch (PDOException $e) {
    echo '[ERRO] Erro ao criar conta ->' . $e . '';
}

?>