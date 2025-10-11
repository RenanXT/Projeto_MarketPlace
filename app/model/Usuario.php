<?php
class Usuario
{
    private $id_usuario;
    private $nome;
    private $sobrenome;
    private $nome_social;
    private $genero;
    private $telefone;
    private $cpf_cnpj;
    private $data_nascimento;
    private $email;
    private $usuario;
    private $senha;
    private $banner;
    private $pontuacao;
    private $conexao;

    public function __construct($c)
    {
        $this->conexao = $c;
    }

    public function ConsultarUsuario($u, $s)
    {
        try {
                $sql = "SELECT * FROM usuario WHERE usuario = :usuario and senha = :senha";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bindParam(':usuario', $u, PDO::PARAM_STR);
                $stmt->bindParam(':senha', $s, PDO::PARAM_STR);
                $stmt->execute();
                $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $dados;
        } catch (PDOException $e) {
            echo '[ERRO] Usuario e senha incorretos ->  '.$e.'';
        }
    }
    public function definirDados($dados)
    {
        foreach ($dados as $chave => $valor) {
            if (property_exists($this, $chave)) {
                $this->$chave = $valor;
            }
        }
    }

    // -------------------------      Getters e setters     --------------------------------------


    /**
     * Get the value of id_usuario
     */
    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     *
     * @return  self
     */
    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }



    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     *
     * @return  self
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of nome_social
     */
    public function getNome_social()
    {
        return $this->nome_social;
    }

    /**
     * Set the value of nome_social
     *
     * @return  self
     */
    public function setNome_social($nome_social)
    {
        $this->nome_social = $nome_social;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of cpf_cnpj
     */
    public function getCpf_cnpj()
    {
        return $this->cpf_cnpj;
    }

    /**
     * Set the value of cpf_cnpj
     *
     * @return  self
     */
    public function setCpf_cnpj($cpf_cnpj)
    {
        $this->cpf_cnpj = $cpf_cnpj;

        return $this;
    }

    /**
     * Get the value of data_nascimento
     */
    public function getData_nascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * Set the value of data_nascimento
     *
     * @return  self
     */
    public function setData_nascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of banner
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set the value of banner
     *
     * @return  self
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get the value of pontuacao
     */
    public function getPontuacao()
    {
        return $this->pontuacao;
    }

    /**
     * Set the value of pontuacao
     *
     * @return  self
     */
    public function setPontuacao($pontuacao)
    {
        $this->pontuacao = $pontuacao;

        return $this;
    }

    /**
     * Get the value of conexao
     */
    public function getConexao()
    {
        return $this->conexao;
    }

    /**
     * Set the value of conexao
     *
     * @return  self
     */
    public function setConexao($conexao)
    {
        $this->conexao = $conexao;

        return $this;
    }
}

?>