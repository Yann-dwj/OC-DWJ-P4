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
            <div class="card-body pb-0">
<?php
foreach ($vars['comments'] as $var['comment'])
{
?>
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <?= $var['comment']->author(); ?>
                                <?= $var['comment']->commentDate(); ?>
                            </div>
                            <div class="col-lg-6">
                                <form method="POST" class="text-right">
                                    <button class="btn btn-outline-danger btn-sm" type="submit" name="report">signaler</button>
                                </form>
                            </div>
                        </div>
                        <p>
                            <?= $var['comment']->comment(); ?>
                        </p>
                        <hr>
                    </div>
                </div>
<?php
}
if ($this->isConnect())
{
?>
        </div>               
            <div class="card-footer">
                <!-- Default form reply -->
                <form method="POST">
                    <!-- Comment -->
                    <div class="form-group">
                        <label for="replyFormComment">
                            <i class="fa fa-user"></i>
                            <span class="ml-2"><?= $_SESSION['pseudo'] ?></span>
                            <span class="">|</span>
                            <a href="http://localhost:8888/logout">
                                <span class="mr-1">déconnexion</span>
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </label>
                        <textarea class="form-control" name="comment" id="replyFormComment" rows="5" placeholder="Écrivez votre commentaire ici ..." required></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-info btn-md" type="submit" name="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
                <!-- Default form reply -->
            </div>     
<?php
}
else
{
?>
            </div>
            <div class="card-footer">
                <div class="text-center mb-3">
                    <small>Ajoutez votre commentaire en vous connectant à <a class="font-weight-bold" href="http://localhost:8888/login">votre espace membre</a></small>
                </div>
                <!-- Default form reply -->
                <form method="POST">
                    <!-- Comment -->
                    <div class="form-group">
                        <textarea class="form-control" name="comment" id="replyFormComment" rows="5" placeholder="Écrivez votre commentaire ici ..." disabled></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-info btn-md" type="submit" name="submit" disabled>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
                <!-- Default form reply -->
            </div>
<?php
}
?>
        </div>
    </section>
</div>