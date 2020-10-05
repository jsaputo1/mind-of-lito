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

<!-- Video Section -->
<h1 class="title">Portfolio</h1>
<section class="portfolio">
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
    <figure>
        <?php the_post_thumbnail(); ?>
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    </figure>
    <?php endforeach; wp_reset_postdata(); ?>
</section>

<!-- Contact Section -->

<?php include ('page-contact.php');?>

<!-- Footer -->
    
<?php get_footer();?>