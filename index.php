<?php get_header(); ?>

<?php if (have_posts()): the_post(); ?>
    <div class="row m-0">
        <div class="col d-flex justify-content-center">
            <div class="aboutSection">
                <div>
                    <?php if( !is_singular() ): ?>
                        <?php the_excerpt() ; ?>
                    <?php else: ?>
                        <?php the_content(); ?>
                    <?php endif; ?>
                </div>
                <?php if( !is_singular() ): ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
