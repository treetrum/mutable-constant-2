<?php get_header(); ?>



<section class="posts">
    <div class="row">

        <?php if ( have_posts() ) :  ?>

        <div class="medium-8 medium-offset-2 columns">

            <?php while ( have_posts() ) : the_post(); ?>

            <article class="posts__post">

                <h3 class="posts__post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="posts__post__date"><?php the_time('d.m.Y'); ?></p>
                <div class="posts__post__content">
                    <?php the_content(); ?>
                </div>

            </article>

            <?php endwhile; ?>

        </div>

        <?php endif; ?>
        
    </div>
</section>

<?php get_footer(); ?>
