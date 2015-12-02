<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <h2>Category Archive: <?php echo single_cat_title( '', false ); ?></h2>

    <?php while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>

        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

        	<?php the_excerpt(); ?>

        </article>

    <?php endwhile; ?>

<?php else: ?>

    <p>No posts published in this category.</p>

<?php endif; ?>

<?php get_footer(); ?>