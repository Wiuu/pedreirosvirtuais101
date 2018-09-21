<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 04/09/18
 * Time: 21:04
 */

include_once "/var/www/html/Models/NoticiaModel.php";

class NoticiaController
{
    private $params;

    public function __construct($dadosDoForm)
    {
        $this->params = $dadosDoForm;
    }

    public function salvarNoticia()
    {
        $model = new NoticiaModel();
        return $model->salvarNoticiaNoBanco($this->params);
    }

}

$vaiprobanco = new NoticiaController($_POST);
$resposta = $vaiprobanco->salvarNoticia();

if ($resposta === true) {
    $fodase = urlencode("deu certo, para de postar bosta porra!");
    header('Location: http://localhost/index.php?area=home&message='.$fodase);
} else {
    $fodase = urlencode("Posta direito essa porra!");
    header('Location: http://localhost/index.php?area=postar&message='.$fodase);
}