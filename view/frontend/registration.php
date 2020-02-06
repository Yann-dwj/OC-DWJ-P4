<?php $title = 'Inscription'; ?>
<?php $metaDescription = 'Inscrivez-vous en tant que membre du blog de Jean Forteroche et accedez aux fonctionnalités du site'; ?>

<?php ob_start(); ?>

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

                            <h1 class="h4 mb-4">Inscription</h1>

                            <!-- Pseudo -->
                            <input type="text" name="pseudo" id="defaultRegisterFormPseudo" class="form-control mb-4" placeholder="Pseudo" required>

                            <!-- E-mail -->
                            <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" required>

                            <!-- Password -->
                            <input type="password" name="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Mot de passe" required
                            aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            minimum de 8 caractères
                            </small>
                            
                            <!-- Password Confirm -->
                            <input type="password" name="passwordConfirm" id="defaultRegisterFormPasswordConfirm" class="form-control" placeholder="Confirmation du mot de passe" required
                            aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            <small id="defaultRegisterFormPasswordConfirmHelpBlock" class="form-text text-muted mb-4">
                            
                            </small>
                            
                            <!-- Sign up button -->
                            <button class="btn btn-info my-4 btn-block" type="submit" name="submit">S'inscrire</button>
                            
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

<?php $content = ob_get_clean(); ?>

<?php require('templateFrontend.php') ?>