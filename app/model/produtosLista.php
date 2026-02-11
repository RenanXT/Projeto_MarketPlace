<?php
try {

    $filtro = $_POST['filtro'] ?? null;

    $sql = 'SELECT p.*,
            c.tipo,
            i.caminho_arquivo,
            o.texto_opiniao
        FROM produto p
        INNER JOIN categoria c 
            ON c.id_categoria = p.id_categoria
        INNER JOIN imagem_produto i 
            ON i.id_produto = p.id_produto
        LEFT JOIN opiniaoproduto o 
            ON o.id_produto = p.id_produto
    ';
    // .= faz com que caso o filtro tiver valor,
    //  adiciona o texto no final de $sql!
    if (!empty($filtro)) {
        $sql .= " WHERE c.tipo = :filtro";
    }
    $stmt = $conexao->prepare($sql);
    if (!empty($filtro)) {
        $stmt->bindParam(':filtro', $filtro, PDO::PARAM_STR);
    }
    $stmt->execute();
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($produtos);
    exit;


} catch (PDOException $e) {
    echo '[ERRO] erro consulta -> ' . $e->getMessage();
}
?>