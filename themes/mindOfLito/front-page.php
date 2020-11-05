<!-- Header  -->
<?php get_header(); ?>

<div class="main-container">
    <!-- Video Section -->
    <section class="video">
        <div class="front-page-video">
            <video src="<?php the_field('front_page_video'); ?>" 
            poster="<?php the_field('front_page_video_thumbnail'); ?>" controls>
            ></video>
        </div>
    </section>
    <!-- End Video Section -->
</div>

<!-- Footer -->
<?php get_footer();?>