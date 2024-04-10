<?php get_header(); ?>

<section class="main-section">
<h1>archive.php</h1>

<?php

if( have_posts() ) : 
    while( have_posts() ) :

        the_post();
?>
        <article class="post full">
            <header>
                <h2><?php the_title(); ?></h2> 
                
                <p>Dans <?php the_category(', ') ?></p>
            </header>
            <div class="post-content">
                <?php the_content()?>
            </div>
        </article>
<?php   
    endwhile;
    // Pagination (précédent, suivant).
    the_posts_pagination();
else :
    echo 'Erreur 404 : Aucun contenu à afficher' ;
endif;
?>
</section>

<?php get_footer();