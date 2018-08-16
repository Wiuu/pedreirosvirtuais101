<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 14/08/18
 * Time: 20:35
 */
 include_once('Cadastro.php');

$post = $_POST;

$cadastro = new Cadastro($post);

//$usuario = $cadastro->criarUsuario();

//$cadastro->salvaNoBanco($usuario);

$array = $cadastro->selecionaDoBanco('wsantos@2mundos.net');

var_dump($array);