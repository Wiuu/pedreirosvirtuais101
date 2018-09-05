<?php
session_start();
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 28/08/18
 * Time: 20:30
 */

include_once "../Models/AutenticacaoModel.php";

class LoginController
{
        private $parametros;

        public function __construct($param)
        {
            $this->parametros = $param;
        }

        public function pegaUsuarioeAutentica()
        {
            $model = new AutenticacaoModel();
            return $model->pegaUsuario($this->parametros);
        }
}

$teste = new LoginController($_POST);
$retorno = $teste->pegaUsuarioeAutentica();

if (count($retorno) > 0) {
    $_SESSION['id'] = $retorno[0]['id'];
    $_SESSION['nome'] = $retorno[0]['nome'];
    $_SESSION['sobrenome'] = $retorno[0]['sobrenome'];
    $_SESSION['email'] = $retorno[0]['email'];

    header('Location: http://localhost/index.php?area=home');
} else {
    $fodase = urlencode("se fodeu, loga denovo");
    header('Location: http://localhost/index.php?area=login&message='.$fodase);
}