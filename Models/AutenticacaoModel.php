<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 21/08/18
 * Time: 21:34
 */
include_once "con/Conexao.php";

class AutenticacaoModel
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function salvarUsuarioNoBanco($dados)
    {
        $pdo = $this->conexao->openConnection();

        $sql = 'INSERT INTO
                    usuariosfodase
                    SET 
                    nome=:nome,
                    sobrenome=:sobrenome,
                    email=:email,
                    username=:username,
                    senha=:senha
                    ';

        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':nome' => $dados['nome'],
            ':sobrenome' => $dados['sobrenome'],
            ':email' => $dados['email'],
            ':username' => $dados['username'],
            ':senha' => md5($dados['senha'])
        ));

        return $dados['username'];
    }

    public function pegaUsuario($dados)
    {

        $pdo = $this->conexao->openConnection();

        $query = '
            SELECT * FROM 
            usuariosfodase
            WHERE 
            (
            email=:emailusername
            OR 
            username=:emailusername
            )
            AND 
            senha=:senha
        ';

        $stmt = $pdo->prepare($query);

        $stmt->execute(array(
            ':emailusername' => $dados['emailusername'],
            ':senha' => md5($dados['senha'])
        ));
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }


}