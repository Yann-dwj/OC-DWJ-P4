<?php session_start() ?>
<?php $title = 'Contact'; ?>
<?php $metaDescription = 'Prenez contact avec l\'auteur de romans d\'aventures à succèss Jean Forteroche'; ?>

<div class="container z-depth-1 my-5 px-0">
    <!--Section: Content-->
    <section class="my-md-5" 
    style="background-image: url('../public/images/giammarco-boscaro-zeH-ljawHtg-unsplash.jpg'); background-size: cover; background-position: center center;">

        <div class="rgba-black-strong rounded p-5">

            <!-- Section heading -->
            <h1 class="h3 text-center font-weight-bold text-white mt-3 mb-5">Contact</h1>

            <form class="mx-md-5" action="">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body px-4">
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="form-name" class="form-control">
                                    <label for="form-name">Votre nom</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="text" id="form-email" class="form-control">
                                    <label for="form-email">Votre email</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-tag prefix grey-text"></i>
                                    <input type="text" id="form-Subject" class="form-control">
                                    <label for="form-Subject">Sujet</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-pencil prefix grey-text"></i>
                                    <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="form-text">Votre message</label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-md btn-block ml-0 mb-0">Envoyer</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1 mt-md-4 mb-4 white-text">
                        <h5 class="font-weight-bold">Adresse</h5>
                        <p class="mb-0">10 Rue d'édition</p>
                        <p class="mb-0">75000 Paris</p>
                        <p class="mb-4 pb-2">France</p>

                        <h5 class="font-weight-bold">Téléphone</h5>
                        <p class="mb-4 pb-2">+ 01 234 567 89</p>

                        <h5 class="font-weight-bold">E-mail</h5>
                        <p>info@gmail.com</p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--Section: Content-->
</div>