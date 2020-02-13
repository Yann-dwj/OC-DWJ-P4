<?php $title = 'Connexion'; ?>
<?php $metaDescription = 'Connectez-vous à votre espace membre, redigez vos commentaires et partagez votre experience avec la communauté du blog'; ?>

<div class="container my-5 py-5 z-depth-1">
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-md-6">
                <!-- Material form login -->
                <div class="card">
                    <!--Card content-->
                    <div class="card-body">
                        <!-- Default form register -->
                        <form class="text-center" action="http://localhost:8888/login" method="post">

                            <h1 class="h4 mb-4">Connexion</h1>

<?php 
if (isset($vars['error']))
{
?>
                            <p class="bg-danger"><span class="text-white"><?php echo $vars['error']; ?></span></p>         
<?php
}
?>

                            <!-- E-mail -->
                            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail"  name="email" required>

                            <!-- Password -->
                            <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Mot de passe"  name="password" required
                            aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            
                            <!-- Sign up button -->
                            <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Se connecter</button>

                            <hr>

                            <small>Vous n'avez pas d'identifiants de connexion ?</small>

                            <p>
                                <a href="http://localhost:8888/registration">Inscrivez-vous</a>
                            </p>
                            
                        </form>
                        <!-- Default form register -->
                    </div>
                    <!--Card content-->
                </div>
                <!-- Material form login -->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </section>
    <!--Section: Content-->
</div>