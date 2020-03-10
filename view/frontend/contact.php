<?php $css = 'style.css' ?>
<?php $title = 'Contact'; ?>
<?php $metaDescription = 'Prenez contact avec l\'auteur de romans d\'aventures à succèss Jean Forteroche'; ?>

<div class="container-fluid pt-3">
    <section class="" 
    style="background-image: url('http://localhost:8888/public/images/rana-sawalha-W_-6PWGbYaU-unsplash.jpg'); background-size: cover; background-position: center center;">
        <div class="rgba-black-strong rounded px-md-5 py-md-3 px-lg-5 py-lg-3">
            <form class="mx-lg-5" action="">
                <div class="row">
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card">
                            <h1 class="h5 text-center text-uppercase font-weight-bold pt-4">Contact</h1>

                            <div class="card-body pt-0 px-4">
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
                    <div class="col-lg-5 offset-lg-1 text-center white-text my-auto">
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
</div>