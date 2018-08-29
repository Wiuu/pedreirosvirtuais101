<?php
$argumentos = $_GET;

include_once "Views/partes/cabecalho.php";

if (!empty($argumentos['area'])) {
    $area = (string) $argumentos['area'];
    include_once "Views/partes/".$area.".php";
} else {
    include_once "Views/partes/conteudo.php";
}
include_once "Views/partes/footer.php";


