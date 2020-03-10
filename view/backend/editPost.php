<?php $css = 'style.css' ?>
<?php $title = 'Modifier ' . $vars['post']->title(); ?>
<?php $metaDescription = ''; ?>

<section class="container dark-grey-text my-4">
<?php 
if (isset($vars['message']))
{
?>
    <div class="card">
        <div class="card-header text-center">
            <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button">
                <h1 class="m-0 font-weight-bold" style="font-size: 1em;">Modification de l'article n° <?= $vars['post']->id(); ?></h1>
            </button>
        </div>
        
        <div class="card-body text-center">
            <p class="text-dark font-weight-bold"><?php echo $vars['message']; ?><i class="fas fa-check pl-3 fa-lg"></i></p>
            <a href="/dashboard">
                <button class="btn btn-outline-primary btn-md btn-block">Quitter</button>
            </a>
        </div>
<?php
}
else
{
?>
    <div class="card">
        <div class="card-header text-center">
            <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button">
                <h1 class="m-0 font-weight-bold" style="font-size: 1em;">Modification de l'article n° <?= $vars['post']->id(); ?></h1>
            </button>
        </div>
        
        <div class="card-body">
            <form class="form" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group shadow-textarea">
                    <label for="titlePost">Titre :</label>
                    <input class="form-control" id="titlePost" type="text" name="title" value="<?= $vars['post']->title(); ?>">
                </div>
                <div class="form-group shadow-textarea">
                    <label for="authorPost">Auteur :</label>
                    <input class="form-control" id="authorPost" type="text" name="author" value="<?= $vars['post']->author(); ?>">
                </div>
                <div class="form-group shadow-textarea">
                    <label for="contentPost">Contenu :</label>
                    <textarea id="mytextarea"class="form-control" id="" type="text" name="content" rows="10" placeholder=""><?= $vars['post']->content(); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="imagePost">Image :</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="imageUrl" id="imageUrl" aria-describedby="" placeholder="">
                        <label class="custom-file-label" for="imageUrl">Selectionner un fichier JPEG</label>
                    </div>
                </div>
                <div class="form-group m-0 pt-2">
                    <button type="button" class="btn btn-light font-weight-bold btn-block" data-toggle="modal" data-target="#updatePostModal-<?= $vars['post']->id(); ?>">
                        Valider
                    </button>

                    <div class="modal fade" id="updatePostModal-<?= $vars['post']->id(); ?>" tabindex="-1" role="dialog" aria-labelledby="updatePostLabel-<?= $vars['post']->id(); ?>"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content text-center">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updatePostLabel-<?= $vars['post']->id(); ?>">Article n° <?= $vars['post']->id(); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-dark">Êtes vous sûr de vouloir modifier cet article ?</p>
                                    <small class="text-danger">Attention !</small>
                                    <small class="text-dark">les modifications apportées supprimeront le contenu d'origine</small>
                                </div>
                                <div class="modal-footer flex-center">
                                    <button class="btn btn-outline-danger btn-sm" type="submit" name="edit">Modifier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
}
?>
</section>