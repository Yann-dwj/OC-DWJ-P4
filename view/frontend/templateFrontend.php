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
    <meta property="og:url" content="" /> <!-- TO DO -->
    <meta property="og:title" content="<?= $title ?> | Jean Forteroche" />
    <meta property="og:description" content="<?= $metaDescription ?>" />
    <meta property="og:image" content="" /> <!-- TO DO -->
    <!-- Twitter -->
    <meta property="twitter:card" content="" /> <!-- TO DO -->
    <meta property="twitter:url" content="" /> <!-- TO DO -->
    <meta property="twitter:title" content="<?= $title ?> | Jean Forteroche" />
    <meta property="twitter:description" content="<?= $metaDescription ?>" />
    <meta property="twitter:image" content="" /> <!-- TO DO -->
    <!-- Favicon -->
    <link rel="icon" href="" /> <!-- TO DO -->
    <!-- Frameworks -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="" />
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="http://localhost:8888/">
                    JEAN FORTEROCHE
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a class="nav-link waves-effect" href="http://localhost:8888/">Accueil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link waves-effect" href="http://localhost:8888/blog">Episodes</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link waves-effect" href="http://localhost:8888/contact">Contact</a>
                        </li>
<?php 
if ($this->isAdmin())
{
?>
                        <li class="nav-item">
                        <a class="nav-link waves-effect" href="http://localhost:8888/admin">Administration</a>
                        </li>
<?php
}
?>
                    </ul>
            
                    <!-- Right -->
<?php 
if (isset($_SESSION) && array_key_exists('pseudo', $_SESSION))
{
?>
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item mr-2">
                            <i class="fa fa-user"></i>
                            <span class="ml-2"><?= $_SESSION['pseudo'] ?></span>
                        </li>
                        <li class="nav-item mr-2">|</li>
                        <li class="nav-item mr-2">
                            <a href="http://localhost:8888/logout">
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
                            <a href="http://localhost:8888/login">
                                <i class="fa fa-user"></i>
                                <span class="ml-2">connexion</span>
                            </a>
                        </li>
                        <li class="nav-item mr-2">|</li>
                        <li class="nav-item mr-2">
                            <a href="http://localhost:8888/registration">
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
    <!-- Navbar -->
    </header>
    <div style="margin-top: 100px;">
        <?= $content ?>
    </div>

    <footer>

    </footer>

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