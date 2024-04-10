<?php get_header(); ?>
<h1>single.php</h1>

<section class="the-contents">

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>

            <artcle class="post">

                <h2><?php the_title(); ?></h2>

                <p><?php the_category() ?></p>

                <p><?php the_author() ?></p>

                <div class="content-post">

                    <?php the_content(); ?>
                    
                </div>

            </artcle>
    <?php endwhile;
    endif; ?>
</section>
<?php get_footer(); ?>