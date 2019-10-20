<?php
function add_theme_scripts() {
    wp_enqueue_style( 'BootstrapCSS', get_stylesheet_directory_uri(). '/css/bootstrap.css');
    wp_enqueue_style( 'AnimateCSS', get_stylesheet_directory_uri(). '/css/animate.css');
    wp_enqueue_style( 'StyleCSS', get_stylesheet_directory_uri(). '/css/style.css');


    wp_enqueue_script ('JqueryJS', get_template_directory_uri() . '/js/jquery-3.3.1.js');
    wp_enqueue_script ('BootstrapJS', get_template_directory_uri() . '/js/bootstrap.js');
    wp_enqueue_script ('ProjetSyntheseJS', get_template_directory_uri() . '/js/projetSynthese.js');
}

require get_template_directory() . '/bootstrap-navwalker.php';

add_action( 'wp_enqueue_scripts', 'add_theme_scripts');

register_nav_menu( 'primary', __( 'Primary Menu', 'Description du menu' ) );

// THEME SUPPORT FUNCTION
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-format', array('aside', 'image', 'video'));


