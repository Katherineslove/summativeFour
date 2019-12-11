<?php get_header(); ?>

    <?php if (have_posts()): the_post(); ?>
        <div class="row m-0">
            <div class="col d-flex justify-content-center">
                <div class="singleProductSection">
                    <h1 class="singleProductTitle"><?php echo the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
