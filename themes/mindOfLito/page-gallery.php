<?php get_header(); ?>
<section class="gallery">
    <h1 class="title">Gallery</h1>
    <div class="embedded-video">
        <iframe width="420" height="315"
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
        <div class="card-container">
            <div class="card-image">
                <?php echo ( get_post_meta( get_the_ID(), '_video-link', true ) ); ?>
                <figure>
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
                </figure>
            </div>
            <div class="card-hover-text">
                <div class="gallery-card-text">
                    <h2 data-link="<?php echo ( get_post_meta( get_the_ID(), 'video-link', true ) ); ?>" 
                    class="video-link"><?php the_title(); ?></h2>
                    <?php echo ( get_post_meta( get_the_ID(), '_description', true ) ); ?>
                </div>
            </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer();?>