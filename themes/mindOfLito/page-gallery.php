<?php get_header(); ?>
<section class="gallery">
<h1 class="title">Gallery</h1>
    <div class="gallery-posts">
        <?php
            $args = array( 
                'post_type' => 'post', 
                'cat' => '2', 
                'order' => 'ASC',
                'numberposts' => 9
                );
            $product_posts = get_posts( $args ); 
        ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
        <div class="card-container">
            <figure>
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
            </figure>
            <div class="gallery-card-text">
                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt() ?></p>
            </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer();?>