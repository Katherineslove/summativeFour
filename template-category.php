<?php
/**
* Template Name: Category Custom Page
*/

?>

<?php get_header(); ?>

<div class="container-fluid p-0">

    <?php if(has_nav_menu( 'top_navigation' )): ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-dark">
            <div class="logo">
                <?php if (get_theme_mod('2019logoImageDisplay')): ?>
                    <img src="<?php echo get_theme_mod('2019logoImageDisplay');  ?>"class="img-fluid logoImage">
                <?php else: ?>
                    <a class="navbar-brand" href="index.php"><?php echo get_bloginfo('name'); ?></a>
                <?php endif; ?>
            </div>
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
        </nav>
    <?php endif; ?>

    <h1 class="cartTitle border-bottom"><?php echo the_title(); ?></h1>


    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'news',
        'posts_per_page' => 5,
    );
    $arr_posts = new WP_Query( $args );

    if ( $arr_posts->have_posts() ) :

        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            <div class="row m-0">
                <div class="col">
                    <div class="card mb-3">
                        <article class="w-100 h-100" id="post-<?php the_ID(); ?>" <?php post_class(); ?>
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail();
                            endif;
                            ?>
                            <header class="entry-header my-3">
                                <h1 class="entry-title newsTitle"><?php the_title(); ?></h1>
                            </header>
                            <div class="entry-content d-none d-sm-block mx-3">
                                <?php the_excerpt(); ?>
                            </div>
                            <a class="newsButton mb-2 d-flex justify-content-center" href="<?php the_permalink(); ?>">Read More</a>
                        </article>
                    </div>
                </div>

            </div>
            <?php
        endwhile;
    endif;?>

</div>
<?php get_footer(); ?>
