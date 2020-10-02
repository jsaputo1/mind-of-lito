<!-- Header  -->
<?php get_header(); ?>

<!-- Nav -->
<?php include ('nav.php');?>

<!-- Hero Section -->
<section class="hero">
    <h1>Carlos Marion</h1>
    <h2>Video Editor</h1>
</section>

<!-- About Section -->

<?php include ('page-about.php');?>

<!-- Video Section -->
    <?php
        $args = array( 
            'post_type' => 'post', 
            'cat' => '2', 
            'order' => 'ASC',
            'numberposts' => 3
            );
        $product_posts = get_posts( $args ); 
    ?>
    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
    <h2><?php the_title(); ?></h2>
    <h3><?php the_permalink();?></h3>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endforeach; wp_reset_postdata(); ?>

<!-- Contact Section -->

<!-- Footer -->
    
<?php get_footer();?>