<?php $title = 'Contact'; ?>
<?php $metaDescription = 'Prenez contact avec l\'auteur de romans d\'aventures à succèss Jean Forteroche'; ?>
<?php ob_start(); ?>

<h1 class="text-center">Contactez-moi !</h1>

<?php $content = ob_get_clean(); ?>

<?php require('templateFrontend.php') ?>