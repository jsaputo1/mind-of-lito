<!-- Header  -->
<?php get_header(); ?>

<div class="main-container">

    <!-- Hero Section -->
    <section class="video">
        <?php dynamic_sidebar ('video')?>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
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
</div>

<!-- Footer -->
    
<?php get_footer();?>