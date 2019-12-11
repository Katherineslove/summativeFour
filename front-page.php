<?php get_header(); ?>

<?php if (have_posts()): the_post(); ?>
    <div class="row m-0">
        <div class="col d-flex justify-content-center">
            <div class="aboutSection">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(has_nav_menu( 'services_menu' ) && (get_theme_mod('2019servicesBackgroundDisplay'))): ?>
    <div class="servicesBackground w-100 ">
        <?php if (has_nav_menu( 'services_menu' )): ?>
            <div class="row m-0 servicesSection w-100">
                <nav class="navbar navbar-expand-md navbar-light servicesNav p-0 w-100" role="navigation">

                    <div class="servicesLinks w-100">
                        <h1 class="servicesTitle"><?php echo get_theme_mod('2019servicesHeading')?></h1>
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'services_menu',
                            'container'         => 'div',
                            'menu_class'        => 'nav navbar-nav servicesMenu',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                    </div>
                </nav>
            </div>
        <?php endif; ?>
    </div>
<?php elseif(has_nav_menu( 'services_menu' )): ?>
    <div class="row m-0 servicesSection w-100">
        <nav class="navbar navbar-expand-md navbar-light servicesNav p-0 w-100" role="navigation">

            <div class="servicesLinks w-100">
                <h1 class="servicesTitle"><?php echo get_theme_mod('2019servicesHeading') ?></h1>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'services_menu',
                    'container'         => 'div',
                    'menu_class'        => 'nav navbar-nav servicesMenu',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </nav>
    </div>
<?php else: ?>

<?php endif; ?>


<?php get_footer(); ?>
