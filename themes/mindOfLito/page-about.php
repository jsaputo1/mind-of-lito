<?php
        $args = array( 
            'post_type' => 'post', 
            'cat' => '3', 
            'order' => 'ASC',
            'numberposts' => 3
            );
        $product_posts = get_posts( $args ); 
    ?>
    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?> 

<section class="about">
  <div class="about-text">
    <h1><?php the_title(); ?></h1>
    <h2><?php the_content(); ?></h1>
  </div>
  <div class="about-photo">
    <figure><?php the_post_thumbnail(); ?></figure>
  </div>
</section>

    <!-- Loop ends -->
    <?php endforeach; wp_reset_postdata(); ?>
