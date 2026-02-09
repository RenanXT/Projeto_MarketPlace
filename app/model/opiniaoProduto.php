<?php
try {

  $produto = $_POST['produto'];
  $opiniao = $_POST['texto'];

  // vai faltar avaliacao mas por enquanto vou deixar um valor de teste 
  $sql = "INSERT INTO opiniaoproduto (id_produto, id_usuario, texto_opiniao, avaliacao)
        VALUES (
        :produto,
        :usuario,
        :opiniao,
        5
        );";
  $stmt = $conexao->prepare($sql);
  $stmt->bindParam(':produto', $produto, PDO::PARAM_INT);
  $stmt->bindParam(':usuario', $ID, PDO::PARAM_INT);
  $stmt->bindParam(':opiniao', $opiniao, PDO::PARAM_STR);

  if ($stmt->execute()) {
    echo 'inseriu a opiniao';
    return;
  }


} catch (PDOException $ex) {
  echo '[ERRO] -> erro de__opiniaoProduto.php || ', $ex;
}
?>
<!--
 funciona mas precisa corrigir duas coisas
 uma é que ta inserindo dois registros 
 e a outra é que texto_opiniao ta vazio no banco de dados, mas
 pelo menos insere
  -->