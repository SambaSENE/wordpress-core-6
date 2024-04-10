<?php get_header(); ?>

<section class="the-contents">

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>


            <div class="post-main ">

                <?php the_content(); ?>

            </div>
    <?php endwhile;
    endif; ?>
</section>
<?php get_footer(); ?>