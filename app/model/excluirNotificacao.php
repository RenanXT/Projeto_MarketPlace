<?php

include_once __DIR__ . '/../../config/dataBase.php';

$notificacao = $_POST['id_notificacao'];
var_dump($notificacao);

$sql = "DELETE FROM notificacao WHERE id_notificacao = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':id', $notificacao, PDO::PARAM_INT);

if ($stmt->execute()) {
    var_dump("Notificação deletada com sucesso!");
};
?>