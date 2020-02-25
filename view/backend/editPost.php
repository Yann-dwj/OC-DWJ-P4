<?php $title = 'Modifier ' . $vars['post']->title(); ?>
<?php $metaDescription = ''; ?>

<section class="container dark-grey-text my-4">
        <div class="card ">
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
                            <textarea id="mytextarea"class="form-control" id="" type="text" name="content" rows="5" placeholder=""><?= $vars['post']->content(); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagePost">Image :</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imageUrl" id="imageUrl" aria-describedby="" placeholder="">
                                <label class="custom-file-label" for="imageUrl">Selectionner un fichier JPEG</label>
                            </div>
                        </div>
                        <div class="form-group m-0 pt-2">
                        <button class="btn btn-light font-weight-bold btn-block" type="submit" name="edit">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>