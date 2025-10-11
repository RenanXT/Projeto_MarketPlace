<?php

header('Content-Type: application/json; charset=utf-8');

$servername = "127.0.0.1";
$username = "renan";
$password = "XT645*renan";
$dbname = "nexushubserver";

try {
    $conexao = new PDO(
        "mysql:host=$servername;dbname=$dbname;charset=utf8",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    echo "Falha ao conectar: " . $e->getMessage();
}



$sql = "SELECT * FROM category";
$stmt = $conexao->prepare($sql);

if ($stmt->execute()) {
    $Data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($Data, JSON_UNESCAPED_UNICODE);
}



?>