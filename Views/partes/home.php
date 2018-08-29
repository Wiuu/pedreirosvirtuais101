<?php
session_start();
var_dump(session_id());
exit;
    if(empty(session_id())) {
        $fodase = urlencode("você nao ta logado, pilantra");
        echo '
        <script>
        window.location.href = "http://localhost/index.php?area=login&message='.$fodase.'";
        </script>
        ';
    }
?>

<section id="contact">
<div class="container">
    <h2 class="text-center text-uppercase text-secondary mb-0">LOGO MIZERAVII!!!</h2>
    <hr class="star-dark mb-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">

<div class="alert alert-success" role="alert">
    PARABENS OTAAAARIO!
</div>

        </div>
    </div>
</div>
</section>