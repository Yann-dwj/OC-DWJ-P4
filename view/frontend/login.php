<?php $title = 'Connexion'; ?>
<?php $metaDescription = 'Connectez-vous à votre espace membre, redigez vos commentaires et partagez votre experience avec la communauté du blog'; ?>

<?php ob_start(); ?>

<h1 class="text-center">Se connecter</h1>

<?php $content = ob_get_clean(); ?>

<?php require('templateFrontend.php') ?>