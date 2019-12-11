<?php get_header(); ?>

<?php if( have_posts() ): ?>
<?php while (have_posts()): the_post(); ?>
    <div class="row m-0">
        <div class="col d-flex justify-content-center">
            <div class="aboutSection">
                <div>
                    <?php if( !is_singular() ): ?>
                        <h2 class="text-center"><?php the_title(); ?></h2>
                        <?php the_excerpt() ; ?>
                    <?php else: ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    <?php endif; ?>
                </div>
                <?php if( !is_singular() ): ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
