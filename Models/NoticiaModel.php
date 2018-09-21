<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 21/08/18
 * Time: 21:34
 */
include_once "con/Conexao.php";

class NoticiaModel
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function salvarNoticiaNoBanco($dados)
    {
        $dados['autor'] = (int)$dados['autor'];
        $dados['categoria'] = (int)$dados['categoria'];

        $pdo = $this->conexao->openConnection();
        $sql = 'INSERT INTO
                    noticiasfodase
                    SET 
                    titulo=:titulo,
                    noticia=:noticia,
                    id_autor=:id_autor,
                    id_categoria=:id_categoria
                    ';

        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute(array(
                ':titulo' => $dados['titulo'],
                ':noticia' => $dados['noticia'],
                ':id_autor' => $dados['autor'],
                ':id_categoria' => $dados['categoria'],
            ));

            return true;
        } catch (Exception $exception) {
            return $exception;
        }
    }

    public function pegaCategoriaTudo()
    {
        $pdo = $this->conexao->openConnection();

        $query = '
            SELECT * FROM 
            categorias
        ';

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pegarNoticias($dados)
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