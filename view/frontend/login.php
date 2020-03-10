<?php $css = 'style.css' ?>
<?php $title = 'Connexion'; ?>
<?php $metaDescription = 'Connectez-vous à votre espace membre, redigez vos commentaires et partagez votre experience avec la communauté du blog'; ?>

<div class="container-fluid pt-5">
    <section class="text-center text-lg-left dark-grey-text">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <form class="text-center" action="http://localhost:8888/login" method="post">
                            <h1 class="h4 mb-4 text-uppercase font-weight-bold text-center">Connexion</h1>

<?php 
if (isset($vars['error']))
{
?>
                            <p class="bg-danger"><span class="text-white"><?php echo $vars['error']; ?></span></p>         
<?php
}
?>
                            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail"  name="email" required>

                            <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Mot de passe"  name="password" required
                            aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            
                            <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Se connecter</button>

                            <hr>

                            <small>Vous n'avez pas d'identifiants de connexion ?</small>

                            <p>
                                <a href="http://localhost:8888/registration">Inscrivez-vous</a>
                            </p>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>