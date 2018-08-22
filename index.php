<?php
$argumentos = $_GET;

include_once "Views/partes/cabecalho.php";

if ($argumentos['area'] == 'login') {
    include_once "Views/partes/login.php";
} elseif ($argumentos['area'] == 'register') {
    include_once "Views/partes/registro.php";
} else {
    include_once "Views/partes/conteudo.php";
}


include_once "Views/partes/footer.php";


