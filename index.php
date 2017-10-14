<?php get_header(); ?>
  <div class="promo-carousel-box">
    <div class="promo-controls">
        <span class="fa fa-arrow-left promo-prev" aria-hidden="true"></span>
        <span class="fa fa-arrow-right promo-next" aria-hidden="true"></span>
    </div>
    <div class="owl-carousel promo-carousel">
        <?php while ( $slider_loop->have_posts() ) : $slider_loop->the_post();?>
        <div class="item" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
          <div class="promo-item-content">
            <h2><?php the_title(); ?></h2>
            <h3><?php the_content(); ?></h3>
          </div>
        </div>
        <?php endwhile; ?>
  </div>
  </div>

<?php get_footer(); ?>
