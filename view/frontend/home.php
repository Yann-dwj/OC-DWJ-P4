<?php $title = 'Accueil'; ?>
<?php $metaDescription = 'Billet Simple pour l\'Alaska, le nouveau roman de Jean Forteroche à découvrir en ligne'; ?>

<?php ob_start(); ?>

<h1 class="text-center">Bienvenue sur la page d'accueil</h1>

<?php $content = ob_get_clean(); ?>

<?php require('templateFrontend.php') ?>