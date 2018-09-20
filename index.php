<?php
session_start();
$argumentos = $_GET;

$rotasLivres = array(
    'index',
    'registro',
    'login',
    'home',
    'postar'
);

$rotasRestritas = array(
    'postar',
    'seila'
);

//ESSE IF VERIFICA A SESSAO LOGADA
if (!empty($_SESSION['id'])) {

    $tudo = array_merge($rotasLivres, $rotasRestritas);

    //ESSE IF VERIFICA SE A AREA REQUISITADA EXISTE NO ARRAY TUDO
    if (in_array($argumentos['area'], $tudo)) {
        //CAIU AQUI TA TUDO CORRETO
        include_once "Views/partes/cabecalho_logado.php";
    } else {
        include_once "Views/partes/cabecalho.php";
        //CAIU AQUI A ROTA NAO EXISTE
        include_once "Views/partes/404.php";
    }

//ESSE ELSE INDICA QUANDO O USUARIO NAOOOOO TA LOGADO
} else {

    //ESSE AQUI VERIFICA SE O USUARIO EH PILANTRA
    if (in_array($argumentos['area'], $rotasRestritas)) {
        $fodase = urlencode("Eh muita audácia seu filho duma puta!!");
        echo '.
            <script>
            window.location.replace("http://localhost/index.php?message='.$fodase.'");
            </script>
            .';
        //ESSE ELSE INDICA QUE O USUARIO NAO TA LOGADO, MAS EH HONESTO
    } else {
        include_once "Views/partes/cabecalho.php";
    }
}

if (!empty($argumentos['area'])) {
    $area = (string) $argumentos['area'];
    include_once "Views/partes/".$area.".php";
} else {
    include_once "Views/partes/conteudo.php";
}

include_once "Views/partes/footer.php";


