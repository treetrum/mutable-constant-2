<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="minHeightAdjusted content-area">
    <div class="row">
        <div class="medium-8 medium-offset-2 columns">

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

        </div>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
