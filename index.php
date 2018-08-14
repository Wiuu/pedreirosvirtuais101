<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 13/08/18
 * Time: 19:33
 */

$postinho = $_POST;

include_once "Usuario.php";

$cu = new Usuario();

$cu->guardaSaporraToda('seila@gmail.com', 123456789, 'wiuu');

$cu->mostraSaporraToda();

$paulo = new Usuario();

$paulo->guardaSaporraToda('paulot@troxa.com.br', '123456', 'cudeburro');

$paulo->mostraSaporraToda();

