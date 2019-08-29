<!-- header -->

<?php include "header.php"; ?>

<body>

<!-- Section 1 -->

<section id="informations" class="container h-50">
    <div class="row h-100 text-center align-items-center">
        <div class="offset-xl-2 col-xl-8">
            <h1 class="titre_2_3">Informations</h1>
            <p class="d-none d-sm-block">Au travers de mes expériences, j'ai découvert plusieurs parcs intéressants et endroits pour acheter du matériel spécialisés comprenant un service adapté. Des informations fortes utiles pour bien se préparer. </p>
        </div>
    </div>
</section>

<!-- Section 2  -->

<section id="cover_3" class="container-fluid bg_p3 h-75">
    <div class="row h-100">
        <div class="col-xl-12"></div>
    </div>
</section>

<!-- Section 3  -->

<section id="parc_boutique">
    <div class="container-fluid bgGris p-5">
        <div class="row d-flex flex-wrap align-content-center">
            <div class="col-xl-12 mt-5 mb-5">
                <div class="container d-flex flex-wrap align-content-center">
                    <div class="row align-items-center p-2">
                        <div class="col-xl-4 col-md-12 col-12 p-2">
                            <h2 class="text-center">Parcs et Boutiques!</h2>
                        </div>
                        <div class="col-xl-4 col-md-12 col-12 p-2">
                            <p class="mb-0 d-none d-sm-block">Dans les dernières années, j'ai visité plusieurs parcs dont la plupart furent ceux de SÉPAQ pour profiter des sentiers aménagés et balisés. De plus, lorsqu'on débute, ou pas, il est important de connaitre des endroits pour se procurer du matériel adéquat selon nos besoins. J'ai donc noté ici une petite liste de parcs et de boutiques, tous deux axés sur les activités de plein air.</p>
                        </div>
                        <div class="col-xl-2 col-md-6 col-12 p-2">
                            <h5 class="text-xl-center">SÉPAQ</h5>
                            <ul class="fa-ul">
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>Mont-Orford</li>
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>Grands-Jardins</li>
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>Gaspésie</li>
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>Bic</li>
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>Lac-Témiscouata</li>
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>Frontenac</li>
                            </ul>
                        </div>
                        <div class="col-xl-2 col-md-6 col-12 pl-2 pr-2 pb-2">
                            <h5 class="text-xl-center">Boutiques</h5>
                            <ul class="fa-ul">
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>MEC</li>
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>La Cordée</li>
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>Atmosphere</li>
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>Plein Air Entrepôt</li>
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>Sail</li>
                                <li><span class="fa-li" ><i class="fas fa-chevron-right"></i></span>Altitude Sports</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4 - Formulaire de contact --->

<section id="formulaire" class="container pt-5">
        <div class="row text-center">
            <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6 offset-xl-3 col-xl-6">
                <h2>Me contacter</h2>
                <p class="d-none d-sm-block">N'hésitez pas me contacter pour me questionner ou pour partager vos expériences. Il me fera un plaisir de vous lire et de vous y répondre!</p>
            </div>
        </div>
        <form action="FormulaireEnvoyee.php">
            <div class="row">
                <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6 offset-xl-3 col-xl-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="Prenom" placeholder="Prénom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nom" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="courriel" placeholder="Courriel">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="question"  placeholder="Votre commentaire" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6 offset-xl-3 col-xl-6">
                    <div>
                        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" data-toggle="modal" data-target="#exampleModal" type="submit">Envoyé</button>
                    </div>
                </div>
            </div>
        </form>
</section>


<!-- footer -->

<?php include "footer.php"; ?>