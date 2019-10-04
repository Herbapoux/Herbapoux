
<!-- header -->

<?php include "header.php"; ?>

<!-- Accueil -->

<section id="joindre" class="container-fluid h-50 p-0">
    <div class="parallaxNatation containerFiltre">
        <div class="filtre"></div>
        <div class="container h-100">
            <div class="row text-right d-flex align-items-end text-right h-100">
                <div class="col-xl-12 p-0">
                    <h1 class="text-center text-md-right">Nous joindre</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Offres d'emploi -->

<section id="offresEmploi" class="container-fluid">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-6 col-md-12 p-0 w-100">
                <h2 class="text-left">Offres d'emploi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 p-0 pb-1 pr-md-1 pb-lg-0">
                <div class="p-0 containerFiltre">
                    <div class="filtre"></div>
                    <div class="bgImageSauveteur text-center d-flex flex-wrap align-content-center">
                        <h3 class="w-100">Sauveteur</h3>
                        <div class="container btnBlancP">
                            <a href="" class="btn btnBlanc">+</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 pl-lg-1">
                <div class="container">
                    <div class="row pb-1">
                        <div class="container p-0 containerFiltre">
                            <div class="filtre"></div>
                            <div class="container bgImageComptable text-center d-flex flex-wrap align-content-center">
                                <h3 class="w-100">Comptable</h3>
                                <div class="container btnBlancP">
                                    <a href="" class="btn btnBlanc">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-lg-1">
                        <div class="container p-0 containerFiltre">
                            <div class="filtre"></div>
                            <div class="container bgImageMoniteur text-center d-flex flex-wrap align-content-center">
                                <h3 class="w-100">Moniteur</h3>
                                <div class="container btnBlancP">
                                    <a href="" class="btn btnBlanc">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Où ça ce passe? -->

<section id="ouCaCePasse" class="container-fluid bgBleu pt-4 pb-4">
    <div class="container pt-4 pb-5">
        <div class="row">
            <div class="col-6 col-md-12 p-0 w-100">
                <h2 class="text-left textBlanc">Où ça ce passe?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 pl-0">
                <h4>École scondaire <br class="d-none d-md-block"> Grande-Rivière</h4>
                <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <h5 class="pb-2 textContact">100, rue Broad, <br class="d-none d-md-block"> porte 31 Gatineau <br class="d-none d-md-block"> (QC) J9H 6A9</h5>
            </div>
            <div class="col-md-8 pl-0 pr-0">
                <iframe class="img-fluid w-100 carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2801.281898263238!2d-75.84585548429871!3d45.40365474550218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce021d740fc74f%3A0x9b6f4858bcf5b138!2s100%20Rue%20Broad%2C%20Gatineau%2C%20QC%20J9H%206A9!5e0!3m2!1sfr!2sca!4v1569859078146!5m2!1sfr!2sca" frameborder="0" style="border:0;" allowfullscreen=""></iframe>            </div>
        </div>
    </div>
</section>

<!-- Nous Contacter -->

<section id="nousContacter" class="container-fluid pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-12 p-0 w-100">
                <h2 class="text-left">Nous contacter!</h2>
            </div>
        </div>
        <div class="row d-flex flex-wrap align-items-center">
            <div class="col-lg-6 p-0">
                <h4 class="textContact textNoir pb-2">Il nous fera plaisir de répondre à vos questions!</h4>
            </div>
            <div class="col-lg-6 p-0">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formNom" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="formCourriel" placeholder="Adresse Courriel">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="formText" rows="3" placeholder="Écrivez votre message"></textarea>
                    </div>
                </form>
                <button type="submit" class="btn btnVert btn-block">Envoyer</button>
            </div>
        </div>
    </div>
</section>

<!-- footer -->

<?php include "footer.php"; ?>