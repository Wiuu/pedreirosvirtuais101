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
        <h2 class="text-center text-uppercase text-secondary mb-0">Noticias</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-md-6 col-lg-4">

            </div>
        </div>
    </div>
</section>