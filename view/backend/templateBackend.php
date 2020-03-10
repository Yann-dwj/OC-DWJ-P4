<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="with=device-width, initial-scale=1.0" />
    <!-- Primary Meta Tags -->
    <title><?= $title ?> | Jean Forteroche</title>
    <meta name="title" content="<?= $title ?> | Jean Forteroche" />
    <meta name="description" content="<?= $metaDescription ?>" />
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://yannpedron.com/projet4" />
    <meta property="og:title" content="<?= $title ?> | Jean Forteroche" />
    <meta property="og:description" content="<?= $metaDescription ?>" />
    <meta property="og:image" content="https://yannpedron.com/projet4/public/images/og-image-fb" />
    <!-- Favicon -->
    <link rel="icon" href="../../public/images/jf.ico" />
    <!-- Frameworks -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>    
    <script>
      tinymce.init({
        selector: '#mytextarea',
        placeholder: '',
        width: '100%',
        height: '500px'
      });
    </script>
    <!-- CSS -->
    <link rel="stylesheet" href="../../public/css/<?= $css ?>" />
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">
                <a class="navbar-brand waves-effect" href="/">JEAN FORTEROCHE</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a class="nav-link waves-effect" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link waves-effect" href="/blog">Episodes</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link waves-effect" href="/contact">Contact</a>
                        </li>
<?php 
if ($this->isAdmin())
{
?>
                        <li class="nav-item">
                        <a class="nav-link waves-effect" href="/dashboard">Administration</a>
                        </li>
<?php
}
?>
                    </ul>
<?php 
if ($this->isConnect())
{
?>
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item mr-2">
                            <i class="fa fa-user"></i>
                            <span class="ml-2"><?= $_SESSION['pseudo'] ?></span>
                        </li>
                        <li class="nav-item mr-2">|</li>
                        <li class="nav-item mr-2">
                            <a href="/logout">
                                <span class="mr-1">déconnexion</span>
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                    </ul>
<?php
}
else{
?>
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item mr-2">
                            <a href="/login">
                                <i class="fa fa-user"></i>
                                <span class="ml-2">connexion</span>
                            </a>
                        </li>
                        <li class="nav-item mr-2">|</li>
                        <li class="nav-item mr-2">
                            <a href="/registration">
                                <span class="mr-1">inscription</span>
                                <i class="fa fa-sign-in"></i>
                            </a>
                        </li>
                    </ul>
<?php
}
?>
                </div>
            </div>
        </nav>
    </header>

    <div style="margin-top: 100px;">
        <?= $content ?>
    </div>

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
</body>

</html>