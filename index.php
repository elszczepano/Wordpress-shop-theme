<?php get_header(); ?>
  <div class="owl-carousel promo-carousel">
      <?php while ( $slider_loop->have_posts() ) : $slider_loop->the_post();?>
      <div class="item" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
        <h2><?php the_title(); ?></h2>
        <h3><?php the_content(); ?></h3>
      </div>
      <?php endwhile; ?>
</div>
<?php get_footer(); ?>
