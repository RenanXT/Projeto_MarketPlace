<?php

include_once __DIR__ . '/Usuario.php';

try {
    $Usuario = $_POST['txtUsuario'];
    $Senha = $_POST['txtSenha'];

    $user = new Usuario($conexao);
    $dados = $user->ConsultarUsuario($Usuario, $Senha);
    if (!empty($dados)) {
        $_SESSION['usuarioSession'] = [
            'id_usuario' => $dados[0]['id_usuario'],
            'nome' => $dados[0]['nome'],
            'sobrenome' => $dados[0]['sobrenome'],
            'nome_social' => $dados[0]['nome_social'],
            'genero' => $dados[0]['genero'],
            'telefone' => $dados[0]['telefone'],
            'cpf_cnpj' => $dados[0]['cpf_cnpj'],
            'data_nascimento' => $dados[0]['data_nascimento'],
            'email' => $dados[0]['email'],
            'usuario' => $dados[0]['usuario'],
            'banner' => $dados[0]['banner'],
            'pontuacao' => $dados[0]['pontuacao'],
            'conexao' => $dados[0]['conexao'],
            'id_endereco' => $dados[0]['id_endereco'],
            'cidade' => $dados[0]['cidade'],
            'bairro' => $dados[0]['bairro'],
            'rua' => $dados[0]['rua'],
            'numero' => $dados[0]['numero'],
            'logradouro' => $dados[0]['logradouro']
        ];
        header("Location: index.php?pagina=inicio");
        exit;
    } else {
        echo '
<div class="position-absolute alert alert-dark border-dark alert-dismissible fade show d-flex align-items-center gap-2 py-2 px-3"
     style="z-index:1; top:20px; left:50px; font-size:0.9rem;">
    <p class="fw-bold m-0 flex-grow-1">Usuário ou senha incorretos</p>
    <button type="button" class="close btn btn-sm p-0 px-1" data-dismiss="alert" aria-label="Close" style="line-height:1;">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
    }
} catch (PDOException $e) {
    echo '[ERRO INTERNO] ' . $e . '';
}

?>