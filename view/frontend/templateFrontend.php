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
    <link rel="stylesheet" href="../../public/css/<?= $css ?>" />
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="/">
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
            
                    <!-- Right -->
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
else
{
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
    <!-- Navbar -->

<?php 
if ($view == 'home')
{
?>
        <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('../../public/images/josh-reeder-esparza-JACEkXaAay0-unsplash.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container">
                    <!--Grid row-->
                    <div class="row">
                    <!--Grid column-->
                        <div class="col-md-12 mb-4 white-text text-center">
                            <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
                            data-wow-delay="0.3s"><strong>Billet Simple pour l'Alaska</strong></h1>
                            <hr class="hr-light my-4">
                            <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Le nouveau Roman <br />signé Jean Forteroche</strong></h5>
                            <a class="btn btn-outline-white anchor-scroll" data-class-to="body" data-on-scroll="blur-effect" href="#story">L'histoire</a>
                            <a class="btn btn-outline-white anchor-scroll" data-class-to="body" data-on-scroll="blur-effect" href="#latestPosts"><i class="fas fa-book-open fa-lg"></i></a>
                            <a class="btn btn-outline-white anchor-scroll" data-class-to="body" data-on-scroll="blur-effect" href="#author">A propos</a>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
<?php
}
?>

    </header>

    <div class="main">
        <?= $content ?>
    </div>

    <!-- <footer class="text-center font-small">
        <div class="pt-4">
            <a href="" target="_blank">
                <i class="fab fa-facebook-f mr-3"></i>
            </a>
            <a href="" target="_blank">
                <i class="fab fa-twitter mr-3"></i>
            </a>
            <a href="" target="_blank">
                <i class="fab fa-youtube mr-3"></i>
            </a>
            <a href="" target="_blank">
                <i class="fab fa-google-plus-g mr-3"></i>
            </a>
        </div>
        <div>
            <a class="navbar-brand waves-effect" href="/">JEAN FORTEROCHE</a>
        </div>
    </footer> -->

	<!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- anchorScroll JS -->
    <script type="text/javascript" src="../../public/js/jquery.anchorScroll.min.js"></script>
    <script type="text/javascript" src="../../public/js/initAnchorScroll.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
</body>

</html>