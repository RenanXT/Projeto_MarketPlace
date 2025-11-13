<?php

$tipo = '';
try {
    $sql = 'SELECT * FROM notificacao AS n 
    INNER JOIN loja AS l
    on n.id_loja = l.id_loja
    WHERE destinatario = :id' . $tipo . '';
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $ID, PDO::PARAM_INT);
    if ($stmt->execute()) {
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

} catch (PDOException $e) {
    echo '[ERRO] Consulta NOTIFICAÇOES ->' . $e;
}

?>