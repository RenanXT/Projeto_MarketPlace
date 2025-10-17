<?php

$sql = 'SELECT * FROM `produto`AS P
INNER JOIN `imagem_produto` AS I
ON P.id_produto = I.id_produto';
$stmt = $conexao->prepare($sql);
if ($stmt->execute()) {
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
}


?>
<!-- INSERT INTO `imagem_produto`(`id_arquivo`, `id_produto`, `nome_arquivo`, `tipo_arquivo`, `caminho_arquivo`, `tamanho_arquivo`)
VALUES 
('',
 '',
 '',
 '',
  '/Projeto_MarketPlace/public/img/',
 ''); -->