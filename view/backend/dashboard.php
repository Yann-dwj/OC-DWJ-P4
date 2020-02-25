<?php $title = 'Tableau de bord'; ?>
<?php $metaDescription = ''; ?>

<h1 class="text-center">Bienvenue sur votre tableau de bord</h1>

<!-- Section: Block Content -->
<section class="container mt-5">
    <!--Grid row-->
    <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="media white z-depth-1 rounded">
                <i class="fas fa-file-alt fa-2x blue z-depth-1 p-4 rounded-left text-white mr-3 text-center" style="width: 88px;"></i>
                <div class="media-body p-1">
                    <p class="text-uppercase text-muted mb-1"><small>Articles</small></p>
                    <h5 class="font-weight-bold mb-0"><?= $vars['numberPosts']; ?></h5>
                </div>
            </div>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="media white z-depth-1 rounded">
                <i class="fas fa-comments fa-2x deep-purple z-depth-1 p-4 rounded-left text-white mr-3 text-center" style="width: 88px;"></i>
                <div class="media-body p-1">
                    <p class="text-uppercase text-muted mb-1"><small>Commentaires</small></p>
                    <h5 class="font-weight-bold mb-0"><?= $vars['numberComments']; ?></h5>
                </div>
            </div>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="media white z-depth-1 rounded">
                <i class="fas fa-users fa-2x pink z-depth-1 p-4 rounded-left text-white mr-3 text-center" style="width: 88px;"></i>
                <div class="media-body p-1">
                    <p class="text-uppercase text-muted mb-1"><small>Utilisateurs</small></p>
                    <h5 class="font-weight-bold mb-0"><?= $vars['numberUsers']; ?></h5>
                </div>
            </div>
        </div>
        <!--Grid column-->
    </div>
    <!--Grid row-->
</section>
<!-- Section: Block Content -->

<section class="container dark-grey-text my-4">
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
                    <form class="form" action="" method="POST" enctype="multipart/form-data">
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
                            <textarea id="mytextarea"class="form-control" id="" type="text" name="content" rows="5" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagePost">Image :</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imageUrl" id="imageUrl" aria-describedby="">
                                <label class="custom-file-label" for="imageUrl">Selectionner un fichier JPEG</label>
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

<section class="container dark-grey-text my-4">
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
                                <!-- <th class="th-lg">
                                    <a href="">Commentaires</a>
                                </th> -->
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
                                <!-- <td><?= $vars['numberCommentsPost']; ?></td> -->
                                <td>
                                    <a href="post?id=<?= $var['post']->id(); ?>" target="_blank">
                                        <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2">
                                            <i class="far fa-eye text-muted"></i>
                                        </button>
                                    </a>
                                    <a href="?post=<?= $var['post']->id(); ?>&action=edit">
                                        <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2">
                                            <i class="fas fa-edit mt-0 text-warning"></i>
                                        </button>
                                    </a>
                                    
                                    <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2" data-toggle="modal" data-target="#deletePostModal-<?= $var['post']->id();?>">
                                        <i class="far fa-trash-alt text-danger"></i>
                                    </button>

                                    <div class="modal fade" id="deletePostModal-<?= $var['post']->id();?>" tabindex="-1" role="dialog" aria-labelledby="deletePostLabel-<?= $var['post']->id();?>"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content text-center">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deletePostLabel-<?= $var['post']->id();?>">Suppression</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-dark">Êtes vous sûr de vouloir supprimer cet article ?</p>
                                                    <small>"<?= $var['post']->title(); ?>"</small>
                                                </div>
                                                <div class="modal-footer flex-center">
                                                <a href="?post=<?= $var['post']->id(); ?>&action=delete">
                                                    <button class="btn btn-outline-danger btn-sm">confirmer</button>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
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

<section class="container dark-grey-text my-4">
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
                                        <?= $var['reportedComment']->postTitle(); ?>
                                    </a>
                                </td>
                                <td><?= $var['reportedComment']->author(); ?></td>
                                <td><?= substr($var['reportedComment']->comment(), 0, 255); ?></td>
                                <td><?= $var['reportedComment']->commentDate(); ?></td>
                                <td>
                                    <a href="post?id=<?= $var['reportedComment']->postId(); ?>" target="_blank">
                                        <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2">
                                            <i class="far fa-eye text-muted"></i>
                                        </button>
                                    </a>

                                    <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2" data-toggle="modal" data-target="#validateCommentModal-<?= $var['reportedComment']->id();?>">
                                        <i class="fas fa-check text-success"></i>
                                    </button>

                                    <div class="modal fade" id="validateCommentModal-<?= $var['reportedComment']->id();?>" tabindex="-1" role="dialog" aria-labelledby="validateCommentLabel-<?= $var['reportedComment']->id();?>"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content text-center">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="validateCommentLabel-<?= $var['reportedComment']->id();?>">Modération</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-dark">Ce commentaire n'a pas besoin d'être modéré ?</p>
                                                    <small>"<?= $var['reportedComment']->comment(); ?>"</small>
                                                </div>
                                                <div class="modal-footer flex-center">
                                                <a href="?comment=<?= $var['reportedComment']->id(); ?>&action=validate">
                                                    <button class="btn btn-outline-success btn-sm">Confirmer</button>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2" data-toggle="modal" data-target="#deleteCommentModal-<?= $var['reportedComment']->id();?>">
                                        <i class="far fa-trash-alt text-danger"></i>
                                    </button>

                                    <div class="modal fade" id="deleteCommentModal-<?= $var['reportedComment']->id();?>" tabindex="-1" role="dialog" aria-labelledby="deleteCommentLabel-<?= $var['reportedComment']->id();?>"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content text-center">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteCommentLabel-<?= $var['reportedComment']->id();?>">Modération</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-dark">Êtes vous sûr de vouloir supprimer ce commentaire ?</p>
                                                    <small>"<?= $var['reportedComment']->comment(); ?>"</small>
                                                </div>
                                                <div class="modal-footer flex-center">
                                                <a href="?comment=<?= $var['reportedComment']->id(); ?>&action=delete">                                                    
                                                    <button class="btn btn-outline-danger btn-sm">Supprimer</button>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

<section class="container dark-grey-text my-4">
    <div class="accordion" id="accordionListUser">
        <!-- Table with panel -->
        <div class="card">
            <!--Card header-->
            <div class="card-header text-center" id="headingFour">
                <h5 class="my-0">
                    <i class="fas fa-user mr-2"></i>
                    <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <p class="m-0">Utilisateurs <i class="fas fa-sort-down"></i></p>
                    </button>
                </h5>
            </div>
            <!--/Card header-->
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionListUser">
                <div class="table-responsive">
                    <!--Table-->
                    <table class="table table-hover mb-0">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>

                                </th>
                                <th class="th-xs">
                                    <a># Id</a>
                                </th>
                                <th class="th-lg">
                                    <a href="">Pseudo</a>
                                </th>
                                <th class="th-lg">
                                    <a href="">E-mail</a>
                                </th>
                                <th class="th-lg">
                                    <a href="">Date d'inscription</a>
                                </th>
                                <th class="th-xs">
                                    
                                </th>
                            </tr>
                        </thead>
                        <!--Table head-->
<?php
foreach ($vars['users'] as $var['user'])
{
?>
                        <!--Table body-->
                        <tbody>
                            <tr>
                                <th scope="row">
                                </th>
                                <td><?= $var['user']->id(); ?></td>
                                <td><?= $var['user']->pseudo(); ?></td>
                                <td><?= $var['user']->email(); ?></td>
                                <td><?= $var['user']->registrationDate(); ?></td>
                                <td>
                                    <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2" data-toggle="modal" data-target="#deleteUserModal-<?= $var['user']->id();?>">
                                        <i class="far fa-trash-alt text-danger"></i>
                                    </button>

                                    <div class="modal fade" id="deleteUserModal-<?= $var['user']->id();?>" tabindex="-1" role="dialog" aria-labelledby="deleteUserLabel-<?= $var['user']->id();?>"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content text-center">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteUserLabel-<?= $var['user']->id();?>">Suppression</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-dark">Êtes vous sûr de vouloir supprimer cet utilisateur ?</p>
                                                    <small>"<?= $var['user']->pseudo(); ?>"</small>
                                                </div>
                                                <div class="modal-footer flex-center">
                                                <a href="?post=<?= $var['user']->id(); ?>&action=delete">
                                                    <button class="btn btn-outline-danger btn-sm">confirmer</button>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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