<?php $title = 'Tableau de bord'; ?>
<?php $metaDescription = ''; ?>

<h1 class="text-center">Bienvenue sur votre tableau de bord</h1>

<section class="container dark-grey-text my-5">
    <div class="accordion" id="accordionNewPost">
        <div class="card ">
            <div class="card-header text-center" id="headingOne">
                <h5 class="my-0">
                    <i class="fas fa-pen-nib mr-2 text-left"></i>
                    <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <p class="m-0">Nouvel Article <i class="fas fa-sort-down"></i></p>
                    </button>
                    
                </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionNewPost">
                <div class="card-body">
                    <form class="form" action="" method="POST">
                        <div class="form-group shadow-textarea">
                            <label for="titlePost">Titre :</label>
                            <input class="form-control" id="titlePost" type="text" name="title" placeholder="">
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="titlePost">Auteur :</label>
                            <input class="form-control" id="titlePost" type="text" name="author" placeholder="">
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="contentPost">Contenu :</label>
                            <textarea class="form-control" id="" type="text" name="content" rows="5" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagePost">Image :</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imageUrl" id="inputGroupFile01" aria-describedby="">
                                <label class="custom-file-label" for="">Selectionner un fichier JPEG ou PNG</label>
                            </div>
                        </div>
                        <div class="form-group m-0 pt-2">
                        <button class="btn btn-light font-weight-bold btn-block" type="submit" name="post">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container dark-grey-text my-5">
    <div class="accordion" id="accordionListPost">
        <!-- Table with panel -->
        <div class="card">
            <!--Card header-->
            <div class="card-header text-center" id="headingTwo">
                <h5 class="my-0">
                    <i class="fas fa-list mr-2"></i>
                    <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <p class="m-0">Liste Des Articles <i class="fas fa-sort-down"></i></p>
                    </button>
                </h5>
            </div>
            <!--/Card header-->
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionListPost">
                <div class="table-responsive">
                    <!--Table-->
                    <table class="table table-hover mb-0">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>

                                </th>
                                <th class="th-xs">
                                    <a>#</a>
                                </th>
                                <th class="th-lg">
                                    <a href="">Titre</a>
                                </th>
                                <th class="th-lg">
                                    <a href="">Auteur</a>
                                </th>
                                <th class="th-lg">
                                    <a href="">Date de création</a>
                                </th>
                                <th class="th-lg">
                                    <a href="">Commentaires</a>
                                </th>
                                <th class="th-sm">
                                    
                                </th>
                            </tr>
                        </thead>
                        <!--Table head-->
<?php
foreach ($vars['posts'] as $var['post'])
{
?>
                        <!--Table body-->
                        <tbody>
                            <tr>
                                <th scope="row">
                                </th>
                                <td><?= $var['post']->id(); ?></td>
                                <td><?= $var['post']->title(); ?></td>
                                <td><?= $var['post']->author(); ?></td>
                                <td><?= $var['post']->creationDate(); ?></td>
                                <td><?= $var['post']->creationDate(); ?></td>
                                <td>
                                    <a href="post?id=<?= $var['post']->id(); ?>" target="_blank">
                                        <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    </a>
                                    <a href="?post=<?= $var['post']->id(); ?>&action=edit">
                                        <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2">
                                            <i class="fas fa-edit mt-0"></i>
                                        </button>
                                    </a>
                                    <a href="?post=<?= $var['post']->id(); ?>&action=delete">
                                        <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <!--Table body-->
<?php
}
?>
                    </table>
                    <!--Table-->
                </div>
            </div>
        </div>
    <!-- Table with panel -->
    </div>
</section>

<section class="container dark-grey-text my-5">
    <div class="accordion" id="accordionReportComment">
        <!-- Table with panel -->
        <div class="card">
            <!--Card header-->
            <div class="card-header text-center" id="headingThree">
                <h5 class="my-0">
                    <i class="fas fa-comment-dots mr-2"></i>
                    <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <p class="m-0">Commentaires Signalés <i class="fas fa-sort-down"></i></p>
                    </button>
                </h5>
            </div>
            <!--/Card header-->
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionReportComment">
<?php
if ($vars['reportedComments'])
{
?>
                <div class="table-responsive">
                    <!--Table-->
                    <table class="table table-hover mb-0">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th></th>
                                <th class="th-xs">
                                    <a>Article</a>
                                </th>
                                <th class="th-md">
                                    <a href="">Auteur</a>
                                </th>
                                <th class="th-lg">
                                    <a href="">Commentaire</a>
                                </th>
                                <th class="th-md">
                                    <a href="">Publié le</a>
                                </th>
                                <th class="th-xs">
                                    
                                </th>
                            </tr>
                        </thead>
                        <!--Table head-->
<?php
foreach ($vars['reportedComments'] as $var['reportedComment'])
{
?>
                        <!--Table body-->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <a href="post?id=<?= $var['reportedComment']->postId(); ?>" target="_blank">
                                        # <?= $var['reportedComment']->postId(); ?>
                                        <i class="far fa-eye ml-2"></i>
                                    </a>
                                </td>
                                <td><?= $var['reportedComment']->author(); ?></td>
                                <td><?= substr($var['reportedComment']->comment(), 0, 255); ?></td>
                                <td><?= $var['reportedComment']->commentDate(); ?></td>
                                <td>

                                <a href="?comment=<?= $var['reportedComment']->id(); ?>&action=validate">
                                    <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </a>


                                <a href="?comment=<?= $var['reportedComment']->id(); ?>&action=delete">
                                    <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </a>



                                </td>
                            </tr>
                        </tbody>
                        <!--Table body-->
<?php
}
?>
                    </table>
                    <!--Table-->
                </div>
<?php
}
else
{
?>
                <p class="text-dark text-center mt-4">Aucun commentaire signalé</p>
<?php
}
?>

            </div>
        </div>
    <!-- Table with panel -->
    </div>
</section>