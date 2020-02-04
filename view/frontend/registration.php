<?php $title = 'Inscription'; ?>
<?php $metaDescription = 'Inscrivez-vous en tant que membre du blog de Jean Forteroche et accedez aux fonctionnalités du site'; ?>

<?php ob_start(); ?>

<h1 class="text-center">S'inscrire</h1>

<?php $content = ob_get_clean(); ?>

<?php require('templateFrontend.php') ?>