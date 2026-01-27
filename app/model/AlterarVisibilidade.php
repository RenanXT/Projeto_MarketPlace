<?php

$status = $_POST['status'];
$id = $_POST['id'];

$sql = "UPDATE notificacao SET estado = :status WHERE id_notificacao = :id";
$stmt = $conexao->prepare($sql);

$stmt->bindParam(':status', $status, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

$stmt->execute();

?>
