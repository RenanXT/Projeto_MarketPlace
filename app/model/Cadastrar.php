<?php

include_once __DIR__ . '/Usuario.php';

try {
    $user = new Usuario($conexao);
    $NovoUsuario = $user->cadastrarUsuario();
        header("Location: index.php?pagina=sair");
        var_dump($dados['senha'][0]);
        exit;
    }
 catch (PDOException $e) {
    echo '[ERRO] Erro ao criar conta ->' . $e . '';
}

?>