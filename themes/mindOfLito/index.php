<!-- Header  -->
<?php get_header(); ?>

<!-- Hero Section -->

<!-- About Section -->

<?php dynamic_sidebar ('about')?>

<!-- Video Section -->

<?php if( have_posts() ) :

    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <h3><?php the_permalink();?></h3>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

<?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<!-- Contact Section -->

<!-- Footer -->
    
<?php get_footer();?>