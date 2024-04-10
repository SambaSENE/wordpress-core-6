<?php get_header(); ?>


<section class="the-contents gamme">

    <?php  if(have_posts()): while(have_posts()) : the_post()?>
    
    <h2><?php the_title(); ?></h2>
    
    <div class="post .cards">
    
    <?php  the_content(); ?>
    
</div>
    <?php endwhile; endif;?>
</section>
<?php get_footer();?>