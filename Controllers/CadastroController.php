<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 21/08/18
 * Time: 21:06
 */
include_once "../Models/AutenticacaoModel.php";

class CadastroController
{
    private $parametros;

    public function __construct($parametrosdoForm)
    {
     $this->parametros = $parametrosdoForm;
    }

    public function cadastrar()
    {
        $model = new AutenticacaoModel();
        return $model->salvarUsuarioNoBanco($this->parametros);
    }

}

$teste = new CadastroController($_POST);
$retorno = $teste->cadastrar();

