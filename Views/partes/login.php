<!-- Contact Section -->
<section id="contact">
    <?php

    $message = $_GET['message'];
    if (!empty($message)) {

    ?>
        <div class="alert alert-danger" role="alert">
            <h1><?php echo urldecode($message); ?></h1>
        </div>

    <?php } ?>

    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Log your self in motha foka!!!</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post" action="Controllers/LoginController.php">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="emailusername" name="emailusername" type="text" placeholder="Email / Username" required="required" data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="senha" name="senha" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl" >Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>