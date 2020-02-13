<?php session_start() ?>
<?php $title = 'Déconnexion'; ?>
<?php $metaDescription = 'Déconnectez-vous de votre espace membre entre deux visites sur le Blog, Billet Simple pour l\'Alaska'; ?>

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
                        <form class="text-center" action="http://localhost:8888/logout" method="post">

                            <h1 class="h4 mb-4">Déconnexion</h1>

                            <p>Vous êtes sur le point de quitter votre espace membre</p>
                                
                            <p>Êtes vous sur de vouloir poursuivre <span class="text-primary"><?php $_SESSION['pseudo'] ?></span> ?</p>
                            
                            <!-- Sign up button -->
                            <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Confirmer</button>

                            <hr>

                            <small>vous ne souhaitez pas nous quitter tout de suite ?</small>

                            <p>
                                <a href="http://localhost:8888/">annuler</a>
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