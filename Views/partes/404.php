<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
    <?php
    $message = $_GET['message'];
    if (!empty($message)) {

        ?>
        <div class="alert alert-danger" role="alert">
            <h1><?php echo urldecode($message); ?></h1>
        </div>

    <?php } ?>
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Pagina nao existe</h2>
    </div>
</section>