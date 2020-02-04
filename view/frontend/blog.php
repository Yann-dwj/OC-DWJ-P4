<?php $title = 'Blog'; ?>
<?php $metaDescription = 'Retrouvez tous les épisodes de "Billet Simple pour l\'Alaska" et rejoignez John McKinley dans ces aventures palpitantes'; ?>

<?php ob_start(); ?>

<h1 class="text-center">Tous les épisodes à découvrir</h1>

<?php $content = ob_get_clean(); ?>

<?php require('templateFrontend.php') ?>