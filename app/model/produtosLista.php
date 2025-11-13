<?php
try {
    $sql = 'SELECT 
            P.*, 
            I.caminho_arquivo, 
            O.avaliacao 
        FROM produto AS P
        LEFT JOIN imagem_produto AS I 
            ON I.id_arquivo = (
                SELECT id_arquivo
                FROM imagem_produto
                WHERE id_produto = P.id_produto
                ORDER BY id_arquivo ASC
                LIMIT 1
            )
        LEFT JOIN opiniaoproduto AS O 
            ON P.id_produto = O.id_produto
        GROUP BY P.id_produto ASC';

    $stmt = $conexao->prepare($sql);
    if ($stmt->execute()) {
        $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $sqlAlt = 'SELECT I.caminho_arquivo
                   FROM imagem_produto AS I
                   INNER JOIN produto AS P
                   WHERE I.id_produto = P.id_produto';
                   $stmt = $conexao->prepare($sqlAlt);
                   if ($stmt->execute()) {
                    $ImgAlt = $stmt->fetchAll(PDO::FETCH_ASSOC);
                   }
    }
} catch (PDOException $e) {
    echo '[ERRO] erro consulta -> ' . $e;
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