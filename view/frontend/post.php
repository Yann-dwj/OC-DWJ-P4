<?php $title = $vars['post']->title(); ?>
<?php $metaDescription = 'Découvrez l\'épisode ' . $vars['post']->title() .' du nouveau roman de Jean Forteroche, Billet Simple pour l\'Alaska'; ?>

<div class="container mt-5">
    <!--Section: Content-->
    <section class="dark-grey-text">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-12">
                <!-- Card -->
                <div class="card card-cascade wider reverse">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="<?= $vars['post']->imageUrl(); ?>" alt="Sample image">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                        <!-- Title -->
                        <h3 class="font-weight-bold"><a><?= $vars['post']->title(); ?></a></h3>
                        <!-- Data -->
                        <p>Écris par <a><strong><?= $vars['post']->author(); ?></strong></a>, <?= $vars['post']->creationDate(); ?></p>
                    </div>
                    <!-- Card content -->
                </div>
                <!-- Card -->
                <!-- Excerpt -->
                <div class="mt-5">
                    <?= $vars['post']->content(); ?>
                </div>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </section>
    <!--Section: Content-->

    <!--Section: Comments-->
    <section class="dark-grey-text">
        <div class="card my-5">
            <div class="card-header font-weight-bold">Commentaire(s)</div>
            <div class="card-body">
<?php
foreach ($vars['comments'] as $var['comment'])
{
?>
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            <span>
                                <?= $var['comment']->author(); ?>
                                <?= $var['comment']->commentDate(); ?>
                            </span>
                        </p>
                        <p><?= $var['comment']->comment(); ?></p>
                        <hr>
                    </div>
                </div>
<?php
}
?>
                <div class="card border-light">
                    <div class="card-footer">
                        <!-- Default form reply -->
                        <form method="POST">
                            <div class="form-group">
<?php 
if (isset($_SESSION) && array_key_exists('pseudo', $_SESSION))
{
?>        
                                <i class="fa fa-user"></i>
                                <span class="ml-2"><?= $_SESSION['pseudo'] ?></span>
                                <span class="">|</span>
                                <a href="http://localhost:8888/logout">
                                    <span class="mr-1">déconnexion</span>
                                    <i class="fa fa-sign-out"></i>
                                </a>
<?php
}
else{
?>
                                <a href="http://localhost:8888/login">
                                    <i class="fa fa-user"></i>
                                    <span class="ml-2">connexion</span>
                                </a>
<?php
}
// @todo mettre le formulaire dans le if
?>
                            </div>
                            <!-- Comment -->
                            <div class="form-group">
                            <label for="replyFormComment">Votre commentaire</label>
                            <textarea class="form-control" name="comment" id="replyFormComment" rows="5"></textarea>
                            </div>
                            <div class="text-center mt-4">
                            <button class="btn btn-info btn-md" type="submit" name="submit">envoyer</button>
                            </div>
                        </form>
                        <!-- Default form reply -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>