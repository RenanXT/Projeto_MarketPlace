<?php

try {
    //  $Post dos Dados de usuario =>
    $Nome = $_POST['txtNome'] ?? null;
    $Sobrenome = $_POST['txtSobrenome'] ?? null;
    $Email = $_POST['txtEmail'] ?? null;
    $Apelido = $_POST['txtApelido'] ?? null;
    $CPF = $_POST['txtCPF'] ?? null;
    $Telefone = $_POST['txtTelefone'] ?? null;
    $Nascimento = $_POST['txtNascimento'] ?? null;


    //  $Post dos endereços =>
    $ID_endereco = $_POST['id_endereco'] ?? null;
    $End0 = $_POST['rua'] ?? null;
    $End1 = $_POST['numero'] ?? null;
    $End2 = $_POST['bairro'] ?? null;
    $End3 = $_POST['cidade'] ?? null;

    if ($End0 == null) {
        $stmt = "UPDATE usuario SET 
        nome = '" . $Nome . "',
        sobrenome = '" . $Sobrenome . "',
        email = '" . $Email . "',
        nome_social = '" . $Apelido . "',
        cpf_cnpj = '" . $CPF . "',
        telefone = '" . $Telefone . "',
        data_nascimento = '" . $Nascimento . "'
        WHERE id_usuario = :id";

        $stmt = $conexao->prepare($stmt);
        $stmt->bindParam(':id', $ID);

        if ($stmt->execute()) {
            echo 'funcionou';
        }
    } else {

        $stmt2 = "UPDATE endereco 
                  SET  cidade = :cidade, bairro = :bairro, rua = :rua,
                  numero = :numero, logradouro = ''
                  WHERE id_usuario = :id AND id_endereco = :endID";

        $stmt2 = $conexao->prepare($stmt2);
        $stmt2->bindParam(':endID', $ID_endereco, PDO::PARAM_INT);
        $stmt2->bindParam(':id', $ID, PDO::PARAM_INT);
        $stmt2->bindParam(':rua', $End0, PDO::PARAM_STR);
        $stmt2->bindParam(':numero', $End1, PDO::PARAM_INT);
        $stmt2->bindParam(':bairro', $End2, PDO::PARAM_STR);
        $stmt2->bindParam(':cidade', $End3, PDO::PARAM_STR);

        if ($stmt2->execute()) {
            echo 'editou o endereco';

            // boas novas, isso funciona mas, o valor de endereco ta salvo na session.
            // nao vai mudar ate que o usuario refaça o login
            // e nao menos importante, essa parte depende completamente da forma 
            // como o usuario vai digitar o input, 
            // mas é provisorio depois faço uma especie de automação pra a entrada do usuario
        }

    }
} catch (PDOException $ex) {
    echo '[ERRO]-> ', $ex;
}


?>