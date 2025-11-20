<?php
try {
    include_once __DIR__ . '/../../config/dataBase.php';

    $Usuario = $_POST['usuario'];
    $loja = $_POST['loja'];
    $assunto = 'RES:: '. $_POST['assunto'];
    $Msg = $_POST['msg'];
    $remetente = $_POST['remetente'];
    $destinatario = $_POST['destinatario'];

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
                :usuario,       
                :loja,       
                '$assunto', 
                '$Msg',     
                 NOW(),      
                '$remetente', 
                '$destinatario', 
                NULL
            )";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':usuario', $Usuario, PDO::PARAM_INT);
    $stmt->bindParam(':loja', $loja, PDO::PARAM_INT);
    $stmt->execute();

} catch (Exception $e) {
    echo '<button class="btn bg-DarkGray text-white">Notificação não enviada!</button>';
    echo "Erro ao enviar notificação: " . $e->getMessage();
}
