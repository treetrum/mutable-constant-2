<?php get_header(); ?>

<section class="posts">
    <div class="row">
        <div class="large-8 large-offset-2 columns">

            <?php for ($i=0; $i < 3; $i++) : ?>

            <article class="posts__post">

                <h3 class="posts__post__title">Post Title Here</h3>
                <p class="posts__post__date">12.06.2015</p>
                <div class="posts__post__content">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut dictum arcu. Ut a turpis in neque placerat tincidunt vel non dui. </p>
                    <blockquote>
                        Cras dictum orci ut ante gravida convallis. Nunc sed arcu vel lorem eleifend luctus. Nam ut malesuada nulla, at dignissim erat. Suspendisse lobortis, tortor ut vestibulum finibus, lorem velit ullamcorper nibh, ac hendrerit libero odio et leo. <strong>Maecenas</strong> felis ex, posuere vel tortor eget, rutrum placerat metus. Proin lacinia libero justo, at consectetur turpis sollicitudin et.
                    </blockquote>
                    <p>
                        <a href="#">Cras dictum orci</a> ut ante gravida convallis. Nunc sed arcu vel lorem eleifend luctus. Nam ut malesuada nulla, at dignissim erat. Suspendisse lobortis, tortor ut vestibulum finibus, lorem velit ullamcorper nibh, ac hendrerit libero odio et leo. Maecenas felis ex, posuere vel tortor eget, rutrum placerat metus. Proin lacinia libero justo, at consectetur turpis sollicitudin et.
                    </p>
                    <p>
                        <a href="#">Cras dictum orci</a> ut ante gravida convallis. Nunc sed arcu vel lorem eleifend luctus. Nam ut malesuada nulla, at dignissim erat. Suspendisse lobortis, tortor ut vestibulum finibus, lorem velit ullamcorper nibh, ac hendrerit libero odio et leo. Maecenas felis ex, posuere vel tortor eget, rutrum placerat metus. Proin lacinia libero justo, at consectetur turpis sollicitudin et.
                    </p>

                </div>

            </article>

            <?php endfor; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
