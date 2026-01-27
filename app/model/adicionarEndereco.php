<?php
try {
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];

    $sql = "
    INSERT INTO endereco (
        id_usuario,
        id_loja,
        cidade,
        bairro,
        rua,
        numero,
        logradouro
    ) VALUES (
        :id,
        NULL,
        :cidade,
        :bairro,
        :rua,
        :numero,
        'rua'
    )
";

    $stmt = $conexao->prepare($sql);
    
    $stmt->bindParam(':id', $ID, PDO::PARAM_INT);
    $stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
    $stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
    $stmt->bindParam(':rua', $rua, PDO::PARAM_STR);
    $stmt->bindParam(':numero', $numero, PDO::PARAM_INT);

    $stmt->execute();

} catch (PDOException $e) {
    echo '[ERRO INTERNO] ' . $e . '';
}

?>