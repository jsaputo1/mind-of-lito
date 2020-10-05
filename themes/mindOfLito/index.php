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
    <?php
        $args = array( 
            'post_type' => 'post', 
            'cat' => '3', 
            'order' => 'ASC',
            'numberposts' => 1
            );
        $product_posts = get_posts( $args ); 
    ?>
    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php endforeach; wp_reset_postdata(); ?>

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
    <?php endforeach; wp_reset_postdata(); ?>

<!-- Contact Section -->

<?php include ('contact.php');?>

<!-- Footer -->
    
<?php get_footer();?>