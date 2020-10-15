<?php get_header(); ?>

<section class="single-post">
    <div class="post-container">
        <?php 
            while( have_posts() ) :
                the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <p><?php the_excerpt() ?></p>

        <?php endwhile;?>
    </div>

</section>
    
<?php get_footer();?>