<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 14/08/18
 * Time: 20:05
 */
include_once "Usuario.php";
include_once "ConectarNoBanco.php";


class Cadastro
{
        private $parametros;

        public function __construct($postdoform)
        {
            $this->parametros = $postdoform;
        }

        public function criarUsuario()
        {
            $usuarioQualquer = new Usuario();
            $usuarioQualquer->setNome($this->parametros['nome']);
            $usuarioQualquer->setSobrenome($this->parametros['sobrenome']);
            $usuarioQualquer->setEmail($this->parametros['email']);
            $usuarioQualquer->setSenha($this->parametros['senha']);
            $usuarioQualquer->setUsername($this->parametros['username']);
            return $usuarioQualquer;
        }


        public function salvaNoBanco(Usuario $usuario)
        {
            $conexao = new ConectarNoBanco();
            $pdo = $conexao->openConnection();

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
                ':nome' => $usuario->getNome(),
                ':sobrenome' => $usuario->getSobrenome(),
                ':email' => $usuario->getEmail(),
                ':username' => $usuario->getUsername(),
                ':senha' => $usuario->getSenha()
            ));

            echo "funfo karaioooooo";
        }

        public function selecionaDoBanco($email)
        {
            $conexao = new ConectarNoBanco();
            $pdo = $conexao->openConnection();

            $sql = 'SELECT * FROM
                    usuariosfodase
                    WHERE 
                    email=:email';

            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':email' => $email,
            ));
            $oquebuscqueidobanco = $stmt->fetchAll();
            var_dump($oquebuscqueidobanco);
            exit;
            return $oquebuscqueidobanco;
        }
}

