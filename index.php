<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 31/08/18
 * Time: 19:27 
 */

include_once "Usuario.php";

$variavelqualquer = new Usuario(); //instancia

$variavelqualquer->guardarEmail("william@seila.com.br");
$variavelqualquer->guardarSenha('12345');
//$variavelqualquer->mostraOsqueeuTenho();

echo '<br><br>';

//$variavelqualquer = new Usuario();
$variavelqualquer->guardarSenha('123456789');
$variavelqualquer->guardarEmail('hermand@email.com');
$variavelqualquer->mostraOsqueeuTenho();
