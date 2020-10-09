<?php get_header(); ?>
<h1 class="title">Gallery</h1>
<section class="gallery">
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
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt() ?></p>
    </figure>
    <?php endforeach; wp_reset_postdata(); ?>
</section>
<?php get_footer();?>