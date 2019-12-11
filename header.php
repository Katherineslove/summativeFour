<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML,CSS,PHP, WordPress">
    <meta name="author" content="Katherine Love">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php wp_head(); ?>
</head>
<body>

    <div class="container-fluid p-0">
        <div class="w-100 headerImage" style="background-image:url(<?php echo get_header_image();?>);">
            <div class="w-100 h-100" style="background: rgba(255,255,255, 0.3) !important;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-dark topNAV">

                    <div class="logo">
                        <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
                    </div>

                    <?php if(has_nav_menu( 'top_navigation' )): ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li>
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'top_navigation',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'navText',
                                        'container_id'      => 'top_navigation',
                                        'menu_class'        => 'nav navbar-nav navLinks',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    ) );
                                    ?>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
