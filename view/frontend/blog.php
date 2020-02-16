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
                <!-- Card -->
                <div class="card hoverable">
                    <!-- Card image -->
                    <img class="card-img-top" src="<?= $var['post']->imageUrl(); ?>" alt="Card image cap">
                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Title -->
                        <h5><a href="#!" class="black-text"><?= $var['post']->title(); ?></a></h5>
                        <small>
                            <span class=""><?= $var['post']->creationDate(); ?></span>
                            <span class=""><?= $var['post']->author(); ?></span>
                        </small>
                        
                        <!-- Text -->
                        <p class="card-title text-muted font-small mt-3 mb-2"><?= substr($var['post']->content(), 0, 255) . '...'; ?></p>
                                    
                        <button type="button" class="btn btn-link text-primary p-0 mx-0">
                            <a href="post?action=post&id=<?= $var['post']->id(); ?>">lire la suite<i class="fa fa-angle-right ml-2"></i></a>
                        </button>
                    </div>
                </div>
                <!-- Card -->
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