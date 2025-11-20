<?php
session_start();
$ID = $_SESSION['usuarioSession']['id_usuario'];
$ID_notificacao = $_POST['ID'];

include_once __DIR__ . '/../../config/dataBase.php';


try {
    $sql = 'SELECT * FROM notificacao AS n 
    INNER JOIN loja AS l
    on n.id_loja = l.id_loja
    WHERE destinatario = :id AND id_notificacao = :notificacao ';
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $ID, PDO::PARAM_INT);
    $stmt->bindParam(":notificacao", $ID_notificacao, PDO::PARAM_INT);

    if ($stmt->execute()) {
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($dados);
    }

} catch (PDOException $e) {
    echo '[ERRO] Consulta NOTIFICAÇOES ->' . $e;
}


?>