<?php
/**
 * Template Name: templateNouvelles
 * description: >- Page template without sidebar
 */

get_header(); ?>

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

<!-- Boucle de l'article-->
<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'cat' => 3)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

        <!-- the loop -->
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <!-- end of the loop -->


    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
