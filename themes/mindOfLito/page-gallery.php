<?php get_header(); ?>
<section class="gallery">
    <h1 class="title"><?php the_field('gallery_title'); ?></h1>
    <div class="embedded-video">
        <video src="<?php the_field('gallery_main_video'); ?>" id="big-video" controls></video>
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