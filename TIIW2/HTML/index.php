<!-- header -->

<?php include "header.php"; ?>

<body>

<!-- Section 1 -->

<section id="acceuil" class="parallax container-fluid h-100">
    <div class="row h-100 text-center align-items-center">
        <div class="col-12 col-lg-6 col-xl-5 text-lg-right">
            <h2>Ma passion d'été:</h2>
            <h1 class="titre m-0">Les randonnées<br>pédestres</h1>
        </div>
    </div>
</section>

<!-- Section 2 -->

<section id="Pourquoi" class="container">
    <div class="row align-items-center pt-5 pb-5">
        <div class="col-12 col-xl-6">
            <h2 class="text-center text-md-left">Pourquoi la randonnée?</h2>
            <p>Être dehors et découvrir chaque jour des paysages différents et nouveaux comble notre esprit d’ondes positives. La nature nous offre ainsi la possibilité d’éviter les pensées ruminantes qui sont néfastes à notre moral.<br>
                Pour garder l’envie et la motivation au quotidien, les sports en extérieurs sont l’occasion de découvrir des sentiers encore inexplorés en s’émerveillant de la beauté que vous offre la nature au quotidien. Les terrains accentués et irréguliers sont l’occasion de vous mettre au défi et de brûler encore un peu plus de calories !
                De plus, les activités en plein air sont souvent ludiques et accessibles à tous.
            </p>
        </div>
        <div class="col-12 col-xl-6 pl-0 pr-0">
            <img class="depassepas" src="img/Sentier.jpg" alt="Sentier" title="Sentier du Québec"/>
        </div>
    </div>
</section>



<!-- Section 3 Carousel-->

<section id="Dernière" class="container-fluid text-center align-items-center bgGris pb-5 pt-5">
    <div class="container text-center align-items-center pb-2">
        <div class="row">
            <div class="col-xl-12">
                <h2>Dernières sorties</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row>">
            <div class="col-xl-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid imagecarousel card-img-bottom" src="img/Mont-St-Bruno.jpg" alt="First slide" title="Saint-Bruno">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Parc national du Mont-Saint-Bruno</h2>
                                <h4>Montérégie</h4>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block img-fluid imagecarousel card-img-bottom" src="img/Montagne-Diable.jpg" alt="Second slide" title="Montagne du Diable">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Parc Montagne du Diable</h2>
                                <h4>Haute Laurentide</h4>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block img-fluid imagecarousel card-img-bottom" src="img/Monts-Ernest-Menard.jpg" alt="Third slide" title="Monts Ernest-Ménard">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Monts Ernest-Ménard</h2>
                                <h4>Gaspésie</h4>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- footer -->

<?php include "footer.php"; ?>