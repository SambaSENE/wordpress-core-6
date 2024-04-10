<?php get_header(); ?>

<section class="the-contents">

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>

            <artcle class="post-article">
                <h1><?php the_title();  ?></h1>
                <article>
                    <div class="content-gamme">
                        <?php the_content(); ?>
                    </div>
                </article>
            </artcle>
    <?php endwhile;
    endif; ?>
</section>

<!-- <?php get_footer(); ?> -->