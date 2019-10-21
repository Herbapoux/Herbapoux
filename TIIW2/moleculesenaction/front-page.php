<?php get_header(); ?>
<!-- header -->

<!-- Accueil -->

<section id="accueil" class="container-fluid p-0 h-100">
    <div class="parallax">
        <div class="filtreAccueil"></div>
        <div class="container-fluid h-100">
            <div class="row h-50 d-flex align-items-end">
                <div class="offset-xl-2 col-xl-9 offset-lg-2 col-lg-8 offset-md-2 col-md-8 offset-sm-2 col-sm-8">
                    <h5 class="text-center text-lg-left fontBlanc">Forme physique, plaisir et santé.</h5>
                    <h1 class="text-center text-lg-left m-0">Molécules en action</h1>
                </div>
            </div>
            <div class="row h-50 align-items-center">
                <div class="offset-lg-8 textBlanc col-lg-3 offset-md-2 col-md-8 offset-sm-3 col-sm-6">

                    <?php
                    // the query
                    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=> 1, 'cat' => 3)); ?>

                    <?php if ( $wpb_all_query->have_posts() ) : ?>

                        <!-- the loop -->
                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                            <h5 class="text-center text-lg-left"><?php the_title(); ?></h5>
                            <?php the_excerpt(); ?>
                            <div class="text-center text-lg-right">
                                <a href="http://d17iwc.expertiseweb.ca/molecules/nouvelles/#important" class="btn btnVert">En savoir +</a>
                            </div>
                        <?php endwhile; ?>
                        <!-- end of the loop -->


                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cours -->

<section id="cours" class="container-fluid">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-6 col-md-12 w-100">
                <h2 class="text-left">Cours</h2>
            </div>
        </div>

        <div class="row">

            <!-- Natation -->

            <div class="col-md-4 pb-1 pb-md-0">
                <div class="bgNatation hovereffect w-100">
                    <img class="filtre img-fluid" src="wp-content/themes/moleculesenaction/images/blank-480x320.png" alt="" style="width:100%">
                    <div class="overlay-bleu"></div>
                    <div class="zone-texte d-flex flex-column justify-content-center align-items-center">
                        <h3 class="text-center">Natation</h3>
                        <p><a class="btn btn-light btn-right" href='javascript:OuvreModalInfo("Natation","wp-content/themes/moleculesenaction/inc/accueil/info/natation.php")' data-fancybox="group"><i class="fas fa-plus"></i></a></p>
                    </div>
                </div>
            </div>

            <!-- Aquaforme -->

            <div class="col-md-4 pb-1 pb-md-0">
                <div class="bgAquaforme hovereffect w-100">
                    <img class="filtre img-fluid" src="wp-content/themes/moleculesenaction/images/blank-480x320.png" alt="" style="width:100%">
                    <div class="overlay-bleu"></div>
                    <div class="zone-texte d-flex flex-column justify-content-center align-items-center">
                        <h3 class="text-center">Aquaforme</h3>
                        <p><a class="btn btn-light btn-right" href='javascript:OuvreModalInfo("Aquaforme","wp-content/themes/moleculesenaction/inc/accueil/info/aquaforme.php")' data-fancybox="group"><i class="fas fa-plus"></i></a></p>
                    </div>
                </div>
            </div>

            <!-- Secourisme -->

            <div class="col-md-4 pb-1 pb-md-0">
                <div class="bgSecourisme hovereffect w-100">
                    <img class="filtre img-fluid" src="wp-content/themes/moleculesenaction/images/blank-480x320.png" alt="" style="width:100%">
                    <div class="overlay-bleu"></div>
                    <div class="zone-texte d-flex flex-column justify-content-center align-items-center">
                        <h3 class="text-center">Secourisme</h3>
                        <p><a class="btn btn-light btn-right" href='javascript:OuvreModalInfo("Secourisme","wp-content/themes/moleculesenaction/inc/accueil/info/secourisme.php")' data-fancybox="group"><i class="fas fa-plus"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- À la une! -->

<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'orderby' => 'date', 'order'=>'DESC', 'posts_per_page'=> 1, 'cat' => 1)); ?>

<section id="" class="container-fluid d-none d-sm-block bgBleu">
    <div class="container py-5">
        <div class="row">
            <?php if ( $wpb_all_query->have_posts() ) : ?>

                <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <div class="col-lg-6 d-flex flex-wrap align-items-center">
                        <h2 class="textBlanc pb-4">À la une!</h2>
                        <h5><?php the_title(); ?></h5>
                        <?php the_excerpt(); ?>
                        <P class="w-100 text-right pr-2"><?php the_time('j F y') ?></P>
                        <div class="row w-100 text-center">
                            <div class="container pt-4">
                                <a href="http://d17iwc.expertiseweb.ca/molecules/nouvelles/#aLaUne" class="btn btnBlanc">Lire +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <?php the_post_thumbnail ('medium_large', array( 'class' => 'img-fluid' )); ?><!-- Image mise en avant -->
                    </div>
                <?php endwhile; ?>

                <!-- end of the loop -->


                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Extras -->

<section id="" class="container-fluid">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-6 col-md-12 w-100">
                <h2 class="text-left">Extra</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 pb-1 pb-md-0">
                <div class="bgMassage hovereffect w-100">
                    <img class="filtre" src="wp-content/themes/moleculesenaction/images/blank-480x320.png" alt="" style="width:100%">
                    <div class="overlay-bleu"></div>
                    <div class="zone-texte d-flex flex-column justify-content-center align-items-center">
                        <h3 class="text-center">Massage</h3>
                        <p><a class="btn btn-light btn-right" href='javascript:OuvreModalInfo("Massages","wp-content/themes/moleculesenaction/inc/extra/info/massage.php")' data-fancybox="group"><i class="fas fa-plus"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-1 pb-md-0">
                <div class="bgPetitesmolecules hovereffect w-100">
                    <img class="filtre" src="wp-content/themes/moleculesenaction/images/blank-480x320.png" alt="" style="width:100%">
                    <div class="overlay-bleu"></div>
                    <div class="zone-texte d-flex flex-column justify-content-center align-items-center">
                        <h3 class="text-center">Petite molécules</h3>
                        <p><a class="btn btn-light btn-right" href='javascript:OuvreModalInfo("Petites Molécules","wp-content/themes/moleculesenaction/inc/extra/info/petites-molecules.php")' data-fancybox="group"><i class="fas fa-plus"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Info -->
<div class="modal" id="ModalInfo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content bgBleuCard">
            <div class="modal-header p-0">
                <h5 class="modal-title">Titre</h5>
                <button type="button" class="close textBlanc" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-0">Contenu</div>
        </div>
    </div>
</div>

<!-- Modal Horaire -->
<div class="modal" id="ModalHoraire" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bgBleuCard">
            <div class="modal-header p-0">
                <h5 class="modal-title">Titre</h5>
                <button type="button" class="close textBlanc" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-0">Contenu</div>
            <div class="modal-footer pb-0">
                <a href="#" class="btn btnBlancInscription mx-auto">Inscription</a>
            </div>
        </div>
    </div>
</div>

<!-- footer -->

<?php get_footer(); ?>

