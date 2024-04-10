<?php get_header(); ?>
<h1>single.php</h1>

<section class="the-contents">
    <artcle class="post-article">

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>


                <h2><?php the_title(); ?></h2>

                <p><?php the_category() ?></p>

                <p><?php the_author() ?></p>

                <div class="content-post">

                    <?php the_content(); ?>

                </div>

                <?php endwhile;
    endif; ?>
    </artcle>
</section>

<?php get_footer(); ?>