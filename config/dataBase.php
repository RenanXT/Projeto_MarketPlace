<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "projeto_marketplace";

try {
    $conexao = new PDO(
        "mysql:host=$servername; dbname=$dbname;charset=utf8",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    echo '[ERRO] base de dados não encontrada!' . $e . '';
}

?>