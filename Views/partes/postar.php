<?php
session_start();

include_once "/var/www/html/Controllers/CategoriaController.php";
?>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Postar Noticias</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post" action="Controllers/NoticiaController.php">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="titulo" name="titulo" type="text" placeholder="Titulo da noticia" required="required" data-validation-required-message="Please enter your name.">
                            <input type="hidden" name="autor" value="<?php echo $_SESSION['id']; ?>" />

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Escolha a Categoria da Noticia</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="categoria">
                            <?php
                            $categoriasBanco = new CategoriaController();
                            $categorias = $categoriasBanco->pegaCategorias();

                            foreach ($categorias as $categoria) {
                                echo '<option value="'.$categoria['id'].'">'.$categoria['nome'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <br/>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Noticia</label>
                            <textarea class="form-control" id="noticia" name="noticia" rows="5" placeholder="Noticia" required="required" data-validation-required-message="Please enter a message." aria-invalid="false"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl" >Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>