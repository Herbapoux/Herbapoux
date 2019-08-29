<!-- header -->

<?php include "header.php"; ?>

<body>

<!-- Section 1 -->

<section id="randonnee" class="container h-50">
    <div class="row h-100 text-center align-items-center">
        <div class="offset-xl-2 col-xl-8">
            <h1 class="titre_2_3">Mes randonnées</h1>
            <p class="d-none d-sm-block">Cette page propose mon parcours au travers des sentiers du Québec. En plus des photos, vous y trouverez mon top 3 des plus belles randonnées que j'ai effectuées ainsi que la liste des différents parcs ou j'ai pu profiter de ma passion d'été. Bon parcours!  </p>
        </div>
    </div>
</section>

<!-- Section 2 -->

<section id="Cover_2" class="container-fluid overflow-hidden bg_p2 h-75">
    <div class="row h-100">
        <div class="col-xl-12"></div>
    </div>
</section>

<!-- Section 3 Jumbotron -->

<section id="jumbotron" class="container mt-5 mb-5 h-550">
    <div class="jumbotron text-center p-5 mb-0">
        <h2 class="pb-2"><strong>Ma prochaine étape!</strong></h2>
        <div class="view overlay my-4">
            <img src="img/LacDesCygnes.jpg" class="img-fluid imgJumbotron" alt="Image" title="Mont-du-Lac-des-Cygnes">
        </div>
        <h5 class="indigo-text h5 mb-4">Le Mont-du-Lac-des-Cygnes</h5>
        <a href="https://fr.wikipedia.org/wiki/Mont_du_Lac_des_Cygnes" target="_blank" class="btn btn-info" role="button">En savoir plus...</a>
    </div>
</section>

<!-- Section 4 Top 3 --->

<section id="top3">
    <div class="container">
        <div class="row text-center align-items-center">
            <div class="offset-xl-2 col-xl-8">
                <h2>Mon top 3</h2>
            </div>
        </div>
        <div class="row top3">
            <div class="col-xl-4 d-flex">
                <div class="card mb-2 flex-fill">
                    <img class="card-img-top"
                         src="img/Acropole-des-Draveurs.jpg" alt="Card image cap" title="Acropole des Draveurs">
                    <div class="card-body text-center">
                        <h4>#1</h4>
                        <h3 class="card-title">Acropole des Draveurs</h3>
                        <p class="card-text d-none d-sm-block">Surtout connue sous le nom de son versant ouest, l'Acropole des Draveurs, est une montagne de 1048 mètres du massif du Lac Jacques-Cartier située au sein du parc national des Hautes-Gorges-de-la-Rivière-Malbaie et de la réserve écologique des Grands-Ormes, dans la région de Charlevoix.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card mb-2 flex-fill">
                    <img class="card-img-top" src="img/Mont_Albert.jpg" alt="Card image cap" title="Mont Albert">
                    <div class="card-body text-center">
                        <h4>#2</h4>
                        <h3 class="card-title">Mont Albert</h3>
                        <p class="card-text d-none d-sm-block">On est dominé par un mont Albert de 1151 m, ce qui permet de prendre la mesure de la tâche à accomplir. L'ascension se fait à l'ombre de la forêt, à l'exception des derniers mètres qui découvrent un vaste plateau.
                            L'ascension se fait à l'ombre de la forêt, à l'exception des derniers mètres qui découvrent un vaste plateau.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card mb-2 flex-fill">
                    <img class="card-img-top" src="img/Mont-St-Joseph.jpg" alt="Card image cap" title="Sentier des Caps">
                    <div class="card-body text-center">
                        <h4>#3</h4>
                        <h3 class="card-title">Sentier des Caps</h3>
                        <p class="card-text d-none d-sm-block">Dominant l’une des plus belles baies au monde, le mont Saint-Joseph jouit d’un positionnement géographique unique; avec ses 555 mètres de dénivelé et à seulement 5 km du littoral, il offre un lieu accessible et disponible pour la pratique d’activités de tous genres.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->

<?php include "footer.php"; ?>