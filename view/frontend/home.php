<?php $css = 'home.css' ?>
<?php $title = 'Accueil'; ?>
<?php $metaDescription = 'Billet Simple pour l\'Alaska, le nouveau roman de Jean Forteroche à découvrir en ligne'; ?>

<section class="container-fluid" id="story">
    <div class="row">
        <div class="col-lg-6 mb-5 text-center">
            <img class="" src="../../public/images/kourosh-qaffari-RrhhzitYizg-unsplash.jpg" alt=""/>
        </div>
        <div class="col-lg-6 mb-5">
            <h2 class="text-uppercase font-weight-bold">L'histoire</h2>
            <p>l'aventurier John McKinley prend un billet simple pour l'Alaska</p>
        </div>
    </div>
</section>

<section class="container-fluid" id="latestPosts">
    <div class="mx-5">
        <div class="pt-5">
            <h2 class="text-uppercase font-weight-bold text-center">Derniers Épisodes</h2>
        </div>
        <div class="row pt-5">
<?php
foreach ($vars['latestPosts'] as $var['latestPost'])
{
?>
            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="post?id=<?= $var['latestPost']->id(); ?>">
                    <!-- Card -->
                    <div class="card hoverable">
                        <!-- Card image -->
                        <img class="card-img-top" src="<?= $var['latestPost']->imageUrl(); ?>" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Title -->
                            <h5 class="text-muted text-capitalize font-small">Episode <?= $var['latestPost']->id(); ?></h5>
                            <!-- Text -->
                            <p class="h4 font-weight-bold text-blue mb-2"><?= $var['latestPost']->title(); ?></p>
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
        <div class="row pb-5 mt-2 pt-2 mx-5 px-5">
            <a class="h4 mx-auto text-uppercase font-weight-bold text-center text-blue" href="/blog" > Voir tous les épisodes <i class="fas fa-long-arrow-alt-right ml-2"></i></a>
        </div>
    </div>
</section>

<section class="container-fluid" id="author">
    <div class="row">
        <div class="col-lg-6 my-5 px-5">
            <h2 class="px-5 text-uppercase font-weight-bold">L'auteur</h2>
            <p class="px-5">Jean Forteroche, ecrivain et </p>
        </div>
        <div class="col-lg-6 my-5 text-center">
            <img class="" src="../../public/images/steven-houston-d2lO9btumD4-unsplash.jpg" alt=""/>
        </div>
    </div>
</section>