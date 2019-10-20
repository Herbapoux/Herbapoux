<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <title>Molécules en action</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
    <?php wp_head(); ?>
</head>

<body>
<!-- Barre de navigation -->

<nav class="col-12 navbar navbar-expand-lg fixed-top textMenu">
    <div class="container-fluid">
        <a class="navbar-brand p-0 m-0" href="<?php echo home_url( '/' ); ?>">
            <img src="/molecules/wp-content/themes/moleculesenaction/images/Logomolecule.jpg" class="imageMenu" alt="logo" title="logo"/>
        </a>

        <div class="d-flex flex-row order-2 order-lg-3  align-items-center">
            <a class="nav-link" href="https://www.facebook.com/" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="nav-link" href="https://twitter.com/" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="nav-link" href="https://www.instagram.com/?hl=fr-ca" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-2x hamburger"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse order-3 order-lg-2 text-right" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-lg-auto mx-0">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary', // Defined when registering the menu
                    'container' => false,
                    'depth' => 2,
                    'menu_class' => 'navbar-nav ml-auto',
                    'walker' => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                    'fallback_cb' => 'Bootstrap_NavWalker::fallback', // For menu fallback
                ) );
                ?>
            </div>
            <div class="navbar-nav">
                <a class="nav-item nav-link btnVert" href="#inscription">Inscription</a>
            </div>
        </div>
    </div>
</nav>