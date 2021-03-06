
<!-- header -->

<?php include "header.php"; ?>

<!-- Accueil -->

<section id="nouvelles" class="container-fluid p-0 h-50">
    <div class="parallaxPlongeon">
        <div class="container h-100">
            <div class="row text-right d-flex align-items-end text-right h-100">
                <div class="col-xl-12">
                    <h1 class="text-center text-md-right">Nouvelles</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Important -->
<!-- Boucle Important-->
<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'cat' => 3)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <section id="important" class="container-fluid">
            <div class="container pt-5 pb-5 d-flex flex-wrap align-items-center">
                <div class="row">
                    <h2 class="w-100 pb-3">Important</h2>
                    <div class="col-12 offset-md-1 col-md-10">
                        <div class="container bgVertImportant d-flex align-items-center">
                            <div class="row textBlanc text-center pt-5 pb-5 p-3">
                                <h4 class="w-100"><?php the_title(); ?></h4><!-- Titre de l'article -->
                                <p class="pl-2 pr-2 text-left"> <?php get_post(); ?></p><!-- extrait de l'article -->
                                <P class="w-100 text-right pr-2 m-0"><?php the_time('m/j/y') ?></P><!-- Date -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <!-- end of the loop -->


    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<!-- Fin de la boucle Important-->


<!-- À la une! -->

<section id="aLaUne" class="container-fluid bgBleu align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
                <div class="container pt-5 pb-5">
                    <h2 class="textBlanc pb-4">À la une!</h2>
                    <div class="offset-sm-1 col-sm-10 offset-md-2 col-md-8">
                        <img class="img-fluid imageMaxime d-none d-sm-block" src="img/JeuneGarconContent.jpg" alt="Garçon piscine" title="Maxime Leroux"/>
                        <h5 class="textBlanc pt-3">Bravo à Maxime Leroux</h5>

                        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <P class="w-100 textBlanc text-right pr-2 m-0">17 septembre 2019</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Autres -->

<section id="autres" class="container-fluid pt-5">
    <div class="container">
        <div class="row pb-3">
            <h2>Autres...</h2>
        </div>
        <div class="row align-items-center pt-4 pb-4">
            <div class="col-12 col-md-6 pr-5">
                <h5 class="textNoir">Nouveau moniteur</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <P class="w-100 text-right pr-2 m-0">17 septembre 2019</P>
            </div>
            <div class="col-6 d-none d-md-block">
                <img class="img-fluid" src="img/JeuneGarconContent.jpg" alt="Image de garçon" title="Maxime">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <hr class="hrVert">
    </div>
    <div class="container pt-4">
        <div class="row align-items-center pb-4">
            <div class="col-12 col-md-6 pr-5">
                <h5 class="textNoir">Nouveau site WEB</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <P class="w-100 text-right pr-2 m-0">17 septembre 2019</P>
            </div>
            <div class="col-6 d-none d-md-block">
                <img class="img-fluid" src="img/JeuneGarconContent.jpg" alt="Image de garçon" title="Maxime">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <hr class="hrVert mb-0">
    </div>
</section>

<!-- Pagination -->

<div class="container text-center pb-5 pt-5">
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-lg justify-content-center m-0 pg-blue">
            <li class="page-item">
                <a class="page-link" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link">1</a></li>
            <li class="page-item"><a class="page-link">2</a></li>
            <li class="page-item"><a class="page-link">3</a></li>
            <li class="page-item">
                <a class="page-link" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

<!-- footer -->

<?php include "footer.php"; ?>

