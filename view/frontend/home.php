<?php $css = 'home.css' ?>
<?php $title = 'Accueil'; ?>
<?php $metaDescription = 'Billet Simple pour l\'Alaska, le nouveau roman de Jean Forteroche à découvrir en ligne'; ?>

<!-- Section: Story -->
<section class="container-fluid" id="story">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-uppercase font-weight-bold">L'histoire</h2>
        </div>
    </div>
    <div class="row align-items-center py-5">
        <div class="col-md-6 mb-5 text-center">
            <img class="img-fluid" src="../../public/images/story.jpg" alt="livre ouvert devant un paysage sauvage"/>
        </div>
        <div class="col-md-6 mb-5">
            <div class="col-md-12 col-lg-10 text-justify">
                <h5 class="mb-4">Lorem ipsum dolor sit amet</h5>
                <p class="mb-4">Consectetur adipiscing elit. Sed vestibulum fermentum luctus. Nam aliquam purus leo, vitae posuere mi commodo aliquam. Nam elit felis, lacinia quis faucibus at, placerat sit amet enim. Integer purus enim, rutrum in fermentum nec, dignissim vel nulla. Ut nisi sapien, blandit eu purus non, porttitor rutrum lacus.</p>
                <h5 class="mb-4">Nulla vel dolor nec elit</h5>
                <p>Iaculis tincidunt sed ac metus. Mauris mattis efficitur enim. Ut eu massa turpis. In sodales elit id erat hendrerit, non sagittis mi egestas. Morbi sit amet tortor vulputate, aliquet lectus at, commodo mi. Vestibulum auctor tempus sagittis. Integer ut nisl elit. Donec sed imperdiet erat.</p>
            </div>
        </div>
    </div>
</section>
<!-- Section: Latest Posts -->
<section class="container-fluid" id="latestPosts">
    <div class="px-5">
        <div class="pt-5">
            <h2 class="text-uppercase font-weight-bold text-center">Derniers Épisodes</h2>
        </div>
        <div class="row pt-5">
<?php
foreach ($vars['latestPosts'] as $var['latestPost'])
{
?>
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="post?id=<?= $var['latestPost']->id(); ?>">
                    <div class="card hoverable">
                        <img class="card-img-top" src="<?= $var['latestPost']->imageUrl(); ?>" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="text-muted text-capitalize font-small">Episode <?= $var['latestPost']->id(); ?></h5>
                            <p class="h4 font-weight-bold text-blue mb-2"><?= $var['latestPost']->title(); ?></p>
                        </div>
                    </div>
                </a>
            </div>
<?php
}
?>
        </div>
        <div class="row pb-5 mt-2 pt-2">
            <div class="col-md-12 text-center">
                <a class="h4 mx-auto text-uppercase font-weight-bold text-blue" href="/blog" > Voir tous les épisodes <i class="fas fa-long-arrow-alt-right ml-2"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Section: Author -->
<section class="container-fluid" id="author">
    <div class="row">
        <div class="col-md-12">
            <h2 class="pt-5 text-center text-uppercase font-weight-bold">L'auteur</h2>
        </div>
    </div>
    <div class="row align-items-center pt-5">
        <div class="col-md-6 mb-5">
            <div class="col-md-12 col-lg-10 offset-lg-2 text-justify">
                <h5 class="mb-4">Praesent eget enim</h5>
                <p class="mb-4">Vivamus eleifend interdum turpis scelerisque semper. Integer sed quam at dolor consectetur lacinia. Aliquam posuere malesuada dui vitae pretium. Cras commodo cursus diam, et laoreet purus condimentum id. Praesent sed augue ipsum. Nam et ligula non mauris fringilla finibus. Phasellus facilisis augue in eros egestas cursus.</p>
                <h5 class="mb-4">Quisque egestas mollis fringilla</h5>
                <p>Aenean at auctor nunc. Vestibulum fermentum est lorem, at fermentum purus aliquet in. Duis blandit faucibus magna, eu pellentesque lacus viverra ac. Aenean tincidunt euismod nunc eu tempus. In ornare pulvinar sapien, a convallis velit. Duis quis tristique erat, ac mattis mauris.</p>
            </div>
        </div>
        <div class="col-md-6 mb-5 text-center">
            <img class="img-fluid" src="../../public/images/author.jpg" alt="l'auteur en séance d'écriture"/>
        </div>
    </div>
</section>