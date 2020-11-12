<?php get_header(); ?>

<section class="contact">
   <h1 class="title"><?php the_field('gallery_big_video_description'); ?></h1>
   <form class="contact-form row">
      <?php the_content(); ?>
   </form>
</section>
    
<?php get_footer();?>