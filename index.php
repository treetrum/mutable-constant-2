<?php get_header(); ?>

<section class="minHeightAdjusted posts">
    <div class="row">

        <?php if ( have_posts() ) :  ?>

        <div class="medium-8 medium-offset-2 columns">

            <?php while ( have_posts() ) : the_post(); ?>

            <article class="posts__post">

                <h3 class="posts__post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><?php if (is_home()) echo " <i class='fa fa-chevron-right'></i>" ?></a></h3>
                <p class="posts__post__date"><?php the_time('d.m.Y'); ?></p>
                <div class="posts__post__content">
                    <?php the_excerpt(); ?>
                </div>

            </article>

            <?php endwhile; ?>

        </div>

        <?php endif; ?>

    </div>
</section>

<section class="pagination">

    <div class="row">
        <div class="medium-8 medium-offset-2 columns">

            <?php global $wp_query;
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
            	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            	'format' => '?paged=%#%',
            	'current' => max( 1, get_query_var('paged') ),
            	'total' => $wp_query->max_num_pages
            ) );
            ?>

        </div>
    </div>

</section>

<?php get_footer(); ?>
