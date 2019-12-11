<?php get_header(); ?>

    <h1 class="shopTitle border-bottom"><?php echo the_title(); ?></h1>

    <?php if (have_posts()): the_post(); ?>
        <div class="row m-0">
            <div class="col d-flex justify-content-center">
                <div class="aboutSection">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
