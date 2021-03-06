<!-- Header  -->
<?php get_header(); ?>

<div class="main-container">

  <!-- About Section -->
  <section class="about">
    <div class="about-box">
        <div class="about-text">
            <div class="about-title">
                <h2><?php the_field('about_name'); ?></h2>
                <h4><?php the_field('about_title'); ?></h4>
            </div>
            <h3><?php the_field('about_paragraph'); ?></h3>
        </div>
        <div class="about-photo">
            <figure><?php the_post_thumbnail(); ?></figure>
        </div>
    </div>
</section>
  <!-- End About Section -->
</div>

<!-- Footer -->
<?php get_footer();?>