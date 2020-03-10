<?php $css = 'style.css' ?>
<?php $title = 'Tableau de bord'; ?>
<?php $metaDescription = 'Accedez à la page d\'administration du blog'; ?>

<h1 class="font-weight-bold text-uppercase text-center">tableau de bord</h1>

<!-- Section: Block Content -->
<section class="container mt-5">
<?php 
if (isset($vars['message']))
{
?>
<!-- Section: Message -->
    <div class="card">
        <div class="card-header text-center">
            <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button">
                <h1 class="m-0 font-weight-bold" style="font-size: 1em;"><?php echo $vars['section'] ;?></h1>
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
<!-- Section: Data Information -->
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="media white z-depth-1 rounded">
                <i class="fas fa-file-alt fa-2x blue z-depth-1 p-4 rounded-left text-white mr-3 text-center" style="width: 88px;"></i>
                <div class="media-body p-1">
                    <p class="text-uppercase text-muted mb-1"><small>Articles</small></p>
                    <h5 class="font-weight-bold mb-0"><?= $vars['numberPosts']; ?></h5>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="media white z-depth-1 rounded">
                <i class="fas fa-comments fa-2x deep-purple z-depth-1 p-4 rounded-left text-white mr-3 text-center" style="width: 88px;"></i>
                <div class="media-body p-1">
                    <p class="text-uppercase text-muted mb-1"><small>Commentaires</small></p>
                    <h5 class="font-weight-bold mb-0"><?= $vars['numberComments']; ?></h5>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4">
            <div class="media white z-depth-1 rounded">
                <i class="fas fa-users fa-2x pink z-depth-1 p-4 rounded-left text-white mr-3 text-center" style="width: 88px;"></i>
                <div class="media-body p-1">
                    <p class="text-uppercase text-muted mb-1"><small>Utilisateurs</small></p>
                    <h5 class="font-weight-bold mb-0"><?= $vars['numberUsers']; ?></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: New Post Form -->
<section class="container dark-grey-text my-4">
    <div class="accordion" id="accordionNewPost">
        <div class="card ">
            <div class="card-header" id="headingOne">
                <div class="row">
                    <div class="col-md-5 col-sm-4 text-right">
                        <i class="fas fa-pen-nib mr-2 text-left"></i>
                    </div>
                    <div class="col-md-7 col-sm-8">
                        <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p class="m-0 font-weight-bold">Nouvel Article <i class="fas fa-sort-down"></i></p>
                        </button>
                    </div>
                </div>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionNewPost">
                <div class="card-body">
                    <form class="form" action="/dashboard" method="POST" enctype="multipart/form-data">
                        <div class="form-group shadow-textarea">
                            <label for="titlePost">Titre :</label>
                            <input class="form-control" id="titlePost" type="text" name="title" placeholder="" required>
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="titlePost">Auteur :</label>
                            <input class="form-control" id="titlePost" type="text" name="author" placeholder="" required>
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="contentPost">Contenu :</label>
                            <textarea id="mytextarea"class="form-control" id="" type="text" name="content" rows="10" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagePost">Image :</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imageUrl" id="imageUrl" aria-describedby="" required>
                                <label class="custom-file-label" for="imageUrl">Selectionner un fichier JPEG</label>
                            </div>
                        </div>
                        <div class="form-group m-0 pt-2">
                            <button class="btn btn-light font-weight-bold btn-block text-white" type="submit" name="post">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Posts List -->
<section class="container dark-grey-text my-4">
    <div class="accordion" id="accordionListPost">
        <div class="card">
            <div class="card-header" id="headingTwo">
                <div class="row">
                    <div class="col-md-5 col-sm-4 text-right">
                        <i class="fas fa-list mr-2"></i>
                    </div>
                    <div class="col-md-7 col-sm-8">
                        <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <p class="m-0 font-weight-bold">Liste des Articles <i class="fas fa-sort-down"></i></p>
                        </button>
                    </div>
                </div>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionListPost">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="th-xs">#</th>
                                <th class="th-lg">Titre</th>
                                <th class="th-lg">Auteur</th>
                                <th class="th-lg">Date de création</th>
                                <th class="th-sm">Voir/Editer/Supprimer</th>
                            </tr>
                        </thead>
<?php
foreach ($vars['posts'] as $var['post'])
{
?>
                        <tbody>
                            <tr>
                                <th scope="row">
                                </th>
                                <td><?= $var['post']->id(); ?></td>
                                <td><?= $var['post']->title(); ?></td>
                                <td><?= $var['post']->author(); ?></td>
                                <td><?= $var['post']->creationDate(); ?></td>
                                <td>
                                    <a href="post?id=<?= $var['post']->id(); ?>" target="_blank">
                                        <button type="button" class="btn btn-outline-dark btn-rounded btn-sm px-2">
                                            <i class="far fa-eye text-muted"></i>
                                        </button>
                                    </a>
                                    <a href="editPost?id=<?= $var['post']->id(); ?>">
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
<?php
}
?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Report Comments -->
<section class="container dark-grey-text my-4">
    <div class="accordion" id="accordionReportComment">
        <div class="card">
            <div class="card-header" id="headingThree">
                <div class="row">
                    <div class="col-md-5 col-sm-4 text-right">
                        <i class="fas fa-comment-dots mr-2"></i>
                    </div>
                    <div class="col-md-7 col-sm-8">
                        <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="m-0 font-weight-bold">Commentaires Signalés <i class="fas fa-sort-down"></i></p>
                        </button>
                    </div>
                </div>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionReportComment">
<?php
if ($vars['reportedComments'])
{
?>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="th-xs">Article</th>
                                <th class="th-md">Auteur</th>
                                <th class="th-lg">Commentaire</th>
                                <th class="th-md">Publié le</th>
                                <th class="th-xs">Voir/Valider/Supprimer</th>
                            </tr>
                        </thead>
<?php
foreach ($vars['reportedComments'] as $var['reportedComment'])
{
?>
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
<?php
}
?>
                    </table>
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
    </div>
</section>
<!-- Section: Users List -->
<section class="container dark-grey-text my-4">
    <div class="accordion" id="accordionListUser">
        <div class="card">
            <div class="card-header" id="headingFour">
                <div class="row">
                    <div class="col-md-5 col-sm-4 text-right">
                        <i class="fas fa-user mr-2"></i>
                    </div>
                    <div class="col-md-7 col-sm-8">
                        <button class="btn btn-link m-0 p-0 font-weight-bold dark-grey-text" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <p class="m-0 font-weight-bold">Utilisateurs <i class="fas fa-sort-down"></i></p>
                        </button>
                    </div>
                </div>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionListUser">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="th-xs"># Id</th>
                                <th class="th-lg">Pseudo</th>
                                <th class="th-lg">E-mail</th>
                                <th class="th-lg">Date d'inscription</th>
                                <th class="th-xs">Supprimer</th>
                            </tr>
                        </thead>
<?php
foreach ($vars['users'] as $var['user'])
{
?>
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
                                                <a href="?user=<?= $var['user']->id(); ?>&action=delete">
                                                    <button class="btn btn-outline-danger btn-sm">confirmer</button>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
<?php
}
?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
</section>