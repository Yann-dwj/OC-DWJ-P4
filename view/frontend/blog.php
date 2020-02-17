<?php session_start() ?>
<?php $title = 'Blog'; ?>
<?php $metaDescription = 'Retrouvez tous les épisodes de "Billet Simple pour l\'Alaska" et rejoignez John McKinley dans ces aventures palpitantes'; ?>

<div class="container mt-5">
    <h1 class="text-center">Tous les épisodes à découvrir</h1>
    <!--Section: Content-->
    <section class="">
        <!-- Grid row -->
        <div class="row">
<?php
foreach ($vars['posts'] as $var['post'])
{
?>
            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="post?action=post&id=<?= $var['post']->id(); ?>">
                    <!-- Card -->
                    <div class="card hoverable">
                        <!-- Card image -->
                        <img class="card-img-top" src="<?= $var['post']->imageUrl(); ?>" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h5 class="black-text"><?= $var['post']->title(); ?></h5>
                            <!-- Text -->
                            <p class="card-title text-muted font-small mt-3 mb-2"><?= substr($var['post']->content(), 0, 255) . '...'; ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="row black-text">
                                <small class="col-sm-6 text-left"><?= $var['post']->creationDate(); ?></small>
                                <small class="col-sm-6 text-right"><?= $var['post']->author(); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </a>
            </div>
            <!-- Grid column -->
<?php
}
?>
        </div>
        <!-- Grid row -->
    </section>
    <!--Section: Content-->
</div>