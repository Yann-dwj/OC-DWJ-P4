<?php $css = 'style.css' ?>
<?php $title = 'Blog'; ?>
<?php $metaDescription = 'Retrouvez tous les épisodes de "Billet Simple pour l\'Alaska" et rejoignez John McKinley dans ces aventures palpitantes'; ?>

<div id="blog" class="container">
    <h1 class="h2 mt-5 py-4 text-uppercase font-weight-bold text-center">Tous les épisodes</h1>

    <section class="">
        <div class="row">
<?php
foreach ($vars['posts'] as $var['post'])
{
?>
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="post?id=<?= $var['post']->id(); ?>">
                    <div class="card hoverable">
                        <img class="card-img-top" src="<?= $var['post']->imageUrl(); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="black-text"><?= $var['post']->title(); ?></h5>
                            <div class="card-title text-muted font-small mt-3 mb-2"><?= substr($var['post']->content(), 0, 205) . '...'; ?></div>
                        </div>
                        <div class="card-footer">
                            <div class="row black-text">
                                <small class="col-sm-6 text-left"><?= $var['post']->creationDate(); ?></small>
                                <small class="col-sm-6 text-right"><?= $var['post']->author(); ?></small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
<?php
}
?>
        </div>
    </section>
</div>