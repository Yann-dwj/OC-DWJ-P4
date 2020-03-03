<?php $css = 'style.css' ?>
<?php $title = 'Inscription'; ?>
<?php $metaDescription = 'Inscrivez-vous en tant que membre du blog de Jean Forteroche et accedez aux fonctionnalités du site'; ?>

<div class="container-fluid pt-5">
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
                        <form class="text-center" action="http://localhost:8888/registration" method="post">

                            <h1 class="h4 mb-4 text-uppercase font-weight-bold text-center">Inscription</h1>

<?php 
if (isset($vars['error']))
{
?>
                            <p class="bg-danger"><span class="text-white"><?php echo $vars['error']; ?></span></p>
<?php
}
elseif (isset($vars['success']))
{
?>
                            <p class="bg-success"><span class="text-white"><?php echo $vars['success']; ?></span></p>

                            <hr/>

                            <small>Vous pouvez desormais acceder à votre espace membre</small>

                            <p>
                                <a href="http://localhost:8888/login">Se connecter</a>
                            </p>
<?php
}
?>

                            <!-- Pseudo -->
                            <input type="text" name="pseudo" id="defaultRegisterFormPseudo" class="form-control mb-4" placeholder="Pseudo" required>

                            <!-- E-mail -->
                            <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" required>

                            <!-- Password -->
                            <input type="password" name="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Mot de passe" required
                            aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            
                            <!-- Password Confirm -->
                            <input type="password" name="passwordConfirm" id="defaultRegisterFormPasswordConfirm" class="form-control mb-4" placeholder="Confirmation du mot de passe" required
                            aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            <small id="defaultRegisterFormPasswordConfirmHelpBlock" class="form-text text-muted mb-4">
                            
                            </small>
                            
                            <!-- Sign up button -->
                            <button class="btn btn-info my-4 btn-block" type="submit" name="submit">S'inscrire</button>

                            <hr>

                            <small id="defaultRegisterFormHelpBlock" class="form-text text-muted mb-4">
                            Le mot de passe doit être compris entre 8 et 12 caractères avec <br />
                            une majuscule, une minuscule, un chiffre et un caractère special.
                            </small>
                            
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