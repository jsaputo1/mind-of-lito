<?php get_header(); ?>
<section class="gallery">
    <h1 class="title">Gallery</h1>
    <div class="embedded-video">
        <iframe width="900" height="450"
        src="https://www.youtube.com/embed/tgbNymZ7vqY" id="big-video">
        </iframe> 
    </div>
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
            <?php $videos = rwmb_meta( '_video-link' );
                    foreach ( $videos as $video ); ?>      
                <div 
                class="card-container video-link" 
                data-link="<?php echo $video['src']; ?>" 
                >
                <figure class="gallery-image">
                    <?php the_post_thumbnail(); ?>
                    <p class="gallery-image-text">
                        <?php echo ( get_post_meta( get_the_ID(), '_description', true ) ); ?>
                    </p>
                </figure>
                </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer();?>