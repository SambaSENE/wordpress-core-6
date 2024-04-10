<?php get_header(); ?>
<h1>Home.php</h1>

<section class="the-contents">

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>

            <h2><?php the_title(); ?></h2>

            <div class="post">

                <?php the_content(); ?>

            </div>
    <?php endwhile;
    endif; ?>
</section>
<?php get_footer(); ?>