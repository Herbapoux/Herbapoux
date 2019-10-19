
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


        <section id="important" class="container-fluid">
            <div class="container pt-5 pb-5 d-flex flex-wrap align-items-center">
                <div class="row">
                    <h2 class="w-100 pb-3">Important</h2>
                    <div class="col-12 offset-md-1 col-md-10">
                        <?php if ( $wpb_all_query->have_posts() ) : ?>

                        <!-- Début de la boucle Important -->
                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                            <div class="container bgVertImportant d-flex align-items-center">
                                <div class="row textBlanc text-center pt-5 pb-5 p-3">
                                    <h4 class="w-100"><?php the_title(); ?></h4><!-- Titre de l'article -->
                                    <?php the_content(); ?><!-- extrait de l'article -->
                                    <P class="w-100 text-right pr-2 m-0"><?php the_time('m/j/y') ?></P><!-- Date -->
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <!-- Fin de la boucle Important-->


                            <?php wp_reset_postdata(); ?>

                        <?php else : ?>
                            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>


<!-- À la une! -->

<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'ASC', 'posts_per_page'=>-3, 'cat' => 4)); ?>


<section id="aLaUne" class="container-fluid bgBleu align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
                <div class="container pt-5 pb-5">
                    <h2 class="textBlanc pb-4">À la une!</h2>
                    <div class="offset-sm-1 col-sm-10 offset-md-2 col-md-8">
                        <?php if ( $wpb_all_query->have_posts() ) : ?>

                        <!-- Début de la boucle Important -->
                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

                            <?php the_post_thumbnail ('medium_large'); ?><!-- Image mise en avant -->
                            <h5 class="textBlanc pt-3"><?php the_title(); ?></h5>
                            <?php the_content(); ?><!-- extrait de l'article -->
                            <P class="w-100 textBlanc text-right pr-2 m-0"><?php the_time('m/j/y') ?></P>
                                <?php endwhile; ?>
                            <!-- Fin de la boucle Important-->


                            <?php wp_reset_postdata(); ?>

                        <?php else : ?>
                            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Autres -->

<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'ASC', 'posts_per_page'=>-3, 'cat' => 5)); ?>
<section id="autres" class="container-fluid pt-5">
    <div class="container">
        <div class="row pb-3">
            <h2>Autres...</h2>
        </div>
        <?php if ( $wpb_all_query->have_posts() ) : ?>

        <!-- Début de la boucle Important -->
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <div class="row align-items-center pt-4 pb-4">
            <div class="col-12 col-md-6 pr-5">
                <h5 class="textNoir"><?php the_title(); ?></h5>
                <?php the_content(); ?><!-- extrait de l'article -->
                <P class="w-100 text-right pr-2 m-0"><?php the_time('m/j/y') ?></P>
            </div>
            <div class="col-6 d-none d-md-block">
                <?php the_post_thumbnail ('medium_large'); ?><!-- Image mise en avant -->
            </div>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

             <?php else : ?>
               <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
              <?php endif; ?>
        </div>
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

