<?php get_header(); ?>
<section class="gallery">
    <h1 class="title"><?php the_field('gallery_title'); ?></h1>
    <div class="embedded-video">
        <video src="<?php the_field('gallery_main_video'); ?>" id="big-video" controls></video>
    </div>
    <div class="video-description">
        <h2 id="big-video-title">Video Title</h2>
        <div class="video-description-text">
            <img src="http://localhost:8888/mindOfLito/wp-content/uploads/2020/09/gettyimages-492684094-1536x1024.jpg" id="video-description-thumbnail">
            <h3 id="video-description"> Description Rhoncus mattis rhoncus urna neque. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Nec feugiat in
            fermentum posuere urna nec tincidunt. Eget mauris pharetra et ultrices neque ornare aenean euismod elementum. Turpis 
            tincidunt</h3>
        </div>
    </div>

        <div class="gallery-posts">
            <div class="owl-carousel">
                <?php
                    $args = array( 
                        'post_type' => 'post', 
                        'order' => 'ASC',
                        );
                    $product_posts = get_posts( $args ); 
                ?>
                <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>    
                <?php $videos = rwmb_meta( '_video-link' );
                    foreach ( $videos as $video ); ?>   
                    <div 
                    class="card-container video-link" 
                    data-link="<?php echo $video['src']; ?>" 
                    title="<?php the_title(); ?>"
                    description="<?php echo ( get_post_meta( get_the_ID(), '_description', true ) ); ?>"
                    thumbnail-link="<?php the_post_thumbnail_url()  ?>">
                        <figure class="gallery-image">
                            <?php the_post_thumbnail(); ?>
                            <div class="gallery-image-text">
                                <p><?php the_title() ?></p>
                                <i class="fas fa-play"></i>
                            </div>
                        </figure>
                        </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
</section>
<?php get_footer();?>