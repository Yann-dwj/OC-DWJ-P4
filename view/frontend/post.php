<?php session_start() ?>
<?php $title = ''; ?>
<?php $metaDescription = 'Découvrez l\'épisode ' . $title .' et entrez un peu plus dans l\'aventure de John McKinley'; ?>

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
        <div class="card card-comments mb-3 wow fadeIn mt-5">
            <div class="card-header font-weight-bold">Commentaire(s)</div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
                        <p>Clement, le 12/03/2019</p>
                        <p>Salut, super ce premier episode, l'intrigue est pas mal malgre le manque de détails on attend la suite avec impatience !
                            dans combien de temps peut on esperer lire la suite ? en tout cas bravo ;)
                        </p>
                        <hr class="mb-5 mt-4">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <p>Clement, le 12/03/2019</p>
                        <p>Salut, super ce premier episode, l'intrigue est pas mal malgre le manque de détails on attend la suite avec impatience !
                            dans combien de temps peut on esperer lire la suite ? en tout cas bravo ;)
                        </p>
                        <hr class="mb-5 mt-4">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <p>Clement, le 12/03/2019</p>
                        <p>Salut, super ce premier episode, l'intrigue est pas mal malgre le manque de détails on attend la suite avec impatience !
                            dans combien de temps peut on esperer lire la suite ? en tout cas bravo ;)
                        </p>
                        <hr class="mb-5 mt-4">
                    </div>
                </div>

                <div class="card border-light">
                    <div class="card-footer">
                        <!-- Default form reply -->
                        <form>
                            <!-- Comment -->
                            <div class="form-group">
                            <label for="replyFormComment">Votre commentaire</label>
                            <textarea class="form-control" id="replyFormComment" rows="5"></textarea>
                            </div>
                            <!-- Name -->
                            <label for="replyFormName">Votre nom</label>
                            <input type="email" id="replyFormName" class="form-control">
                            <br>
                            <!-- Email -->
                            <label for="replyFormEmail">votre e-mail</label>
                            <input type="email" id="replyFormEmail" class="form-control">

                            <div class="text-center mt-4">
                            <button class="btn btn-info btn-md" type="submit">Post</button>
                            </div>
                        </form>
                        <!-- Default form reply -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>