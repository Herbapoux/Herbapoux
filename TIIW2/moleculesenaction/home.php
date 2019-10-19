
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
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page'=> 1, 'cat' => 3)); ?>


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
                                <P class="w-100 text-right pr-2 m-0"><?php the_time('j F y') ?></P><!-- Date -->
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
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'orderby' => 'date', 'order'=>'DESC', 'posts_per_page'=> 1, 'cat' => 1)); ?>


<section id="aLaUne" class="bgBleu align-items-center">
    <div class="container pt-5 pb-5">
        <div class="row">
            <h2 class="textBlanc pb-4">À la une!</h2>
        </div>
        <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
                <div class="offset-sm-1 col-sm-10 offset-md-2 col-md-8">
                    <?php if ( $wpb_all_query->have_posts() ) : ?>

                        <!-- Début de la boucle Important -->
                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

                            <?php the_post_thumbnail ('full', array( 'class' => 'img-fluid' )); ?><!-- Image mise en avant -->
                            <h5 class="textBlanc pt-3"><?php the_title(); ?></h5>
                            <?php the_content(); ?><!-- extrait de l'article -->
                            <P class="w-100 textBlanc text-right pr-2 m-0"><?php the_time('j F y') ?></P>
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
</section>

<!-- Autres -->

<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'orderby' => 'date', 'order'=>'DESC', 'posts_per_page'=> 5, 'cat' => 1, 'offset' => 1)); ?>
<section id="autres" class="">
    <div class="container pt-5 pb-5">
        <div class="row pb-3">
            <h2>Autres...</h2>
        </div>
        <?php if ( $wpb_all_query->have_posts() ) : ?>

            <!-- Début de la boucle Important -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="row align-items-center pt-4 pb-4">
                    <div class="col-12 col-md-6">
                        <div class="pr-5">
                            <h5 class="textNoir"><?php the_title(); ?></h5>
                            <?php the_content(); ?><!-- extrait de l'article -->
                            <P class="w-100 text-right m-0"><?php the_time('j F y') ?></P>
                        </div>
                    </div>
                    <div class="col-6 text-center d-none d-md-block">
                        <?php the_post_thumbnail ('medium', array( 'class' => 'img-fluid' )); ?><!-- Image mise en avant -->
                    </div>
                </div>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif; ?>
    </div>
</section>


<!-- footer -->

<?php include "footer.php"; ?>

