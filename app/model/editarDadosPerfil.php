<?php

try {
    $Nome = $_POST['txtNome'] ?? '';
    $Sobrenome = $_POST['txtSobrenome'] ?? '';
    $Email = $_POST['txtEmail'] ?? '';
    $Apelido = $_POST['txtApelido'] ?? '';
    $CPF = $_POST['txtCPF'] ?? '';
    $Telefone = $_POST['txtTelefone'] ?? '';
    $Nascimento = $_POST['txtNascimento'] ?? '';


    //  $Post dos endereços =>
    $End0 = $_POST['rua'] ?? '';
    $End1 = $_POST['numero'] ?? '';
    $End2 = $_POST['bairro'] ?? '';
    $End3 = $_POST['cidade'] ?? '';

    if ($End1 == null && $End2 == null) {
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

        // mas voce ta editando o endereço de oinde criatura !?
        // voce nem passou o id do endereco e nem imprimiu ele na tela 
        // ali so tem texto bicho burro
        $stmt = "UPDATE endereco SET 
        `id_usuario`= :id,`id_loja`= NULL, `cidade`=':cidade',
        `bairro`=':bairro',`rua`=':rua',`numero`=':numero',
        `logradouro`='' 
        WHERE 1 id_usuario = :id";
        $stmt = $conexao->prepare($stmt);
        $stmt->bindParam(':id', $ID, PDO::PARAM_INT);
        $stmt->bindParam(':rua', $End0, PDO::PARAM_STR);
        $stmt->bindParam(':numero', $End1, PDO::PARAM_STR);
        $stmt->bindParam(':bairro', $End2, PDO::PARAM_STR);
        $stmt->bindParam(':cidade', $End3, PDO::PARAM_STR);

       if ($stmt->execute()) {
            echo 'funcionou';
        }
        
    }



} catch (PDOException $ex) {
    echo '[ERRO]-> ', $ex;
}



?>