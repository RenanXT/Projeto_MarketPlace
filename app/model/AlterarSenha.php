<?php

try {

    $Atual = $_POST['txtAtual'];
    $Nova = $_POST['txtNova'];
    $Confirmar = $_POST['txtConfirmar'];

    $sql = "SELECT senha FROM usuario WHERE id_usuario = :id";
    $sql = $conexao->prepare($sql);
    $sql->bindParam(':id', $ID, PDO::PARAM_INT);
    $sql->execute();
    $SenhaHash = $sql->fetch(PDO::FETCH_ASSOC);

    if (password_verify($Atual, $SenhaHash['senha']) && $Atual != $Nova && $Nova == $Confirmar) {

        $Senha = password_hash($Nova, PASSWORD_DEFAULT);

        $stmt = "UPDATE usuario SET senha = :senha WHERE id_usuario = :id";
        $stmt = $conexao->prepare($stmt);
        $stmt->bindParam(':senha', $Senha, PDO::PARAM_STR);
        $stmt->bindParam(':id', $ID, PDO::PARAM_INT);
        $stmt->execute();

        echo 'OK';
    }
} catch (PDOException $ex) {
    echo '[ERRO] Att Senha -> ', $ex;
}

?>