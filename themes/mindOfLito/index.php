<!-- Header  -->
<?php get_header(); ?>

<!-- Nav -->
<nav>
    <?php wp_nav_menu(array(
        'theme_location' => 'nav'
        )) ;?> 
</nav>

<!-- Hero Section -->
<section class="hero">
    <?php dynamic_sidebar ('hero')?>
</section>

<!-- About Section -->
<section class="about">
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
    <div class="about-text">
        <h2><?php the_title(); ?></h2>
        <h3><?php the_content(); ?></h3>
    </div>
    <div class="about-photo">
        <figure><?php the_post_thumbnail(); ?></figure>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
</section>

<!-- Contact Section -->
<?php include ('page-contact.php');?>

<!-- Footer -->
    
<?php get_footer();?>