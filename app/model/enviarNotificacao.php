<!-- const sender = document.querySelector('p#txtSender')
    const email = document.querySelector('p#txtEmail');
    const target = document.querySelector('p#txtTarget');
    const assunto = document.querySelector('input#txtAssunto');
    const Msg = document.querySelector('textarea#txtMsg'); -->

<?php

$dados = json_decode($_POST['txtJson'], true);

$lojaID = $dados['id_loja'];
$remetente = $dados['remetente'];
$destinatario = $dados['destinatario'];
$assunto = $dados['assunto'];
$Msg = $dados['mensagem'];

try {
    $sql = "INSERT INTO notificacao (
                id_usuario, 
                id_loja, 
                assunto, 
                mensagem, 
                data_envio, 
                remetente, 
                destinatario, 
                estado
            ) VALUES (
                $ID,       
                $lojaID,       
                '$assunto', 
                '$Msg',     
                NOW(),      
                '$remetente', 
                '$destinatario', 
                NULL
            )";

    $stmt = $conexao->prepare($sql);
    $stmt->execute(); // executa o insert

    
    echo '<button class="btn bg-DarkGray text-white">Notificação enviada com sucesso!</button>';

} catch (Exception $e) {
      echo '<button class="btn bg-DarkGray text-white">Notificação não enviada!</button>';
    echo "Erro ao enviar notificação: " . $e->getMessage();
}

?>