<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 15/08/18
 * Time: 19:59
 */

$dadosdoform = $_POST;

include_once "Usuario.php";

$cu = new Usuario();


$cu->setSenha($dadosdoform['senha']);
$cu->setUsername($dadosdoform['username']);
$cu->setEmail($dadosdoform['email']);
$cu->setNome($dadosdoform['nome']);
$cu->setSobrenome($dadosdoform['sobrenome']);

