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
<div class="recommended-products-box">
  <h2 class="recommended-products-header">Polecane produkty</h2>
  <div class="owl-carousel recommended-products-carousel">
    <div class="recommended-products-carousel-tile">1</div>
    <div class="recommended-products-carousel-tile">2</div>
    <div class="recommended-products-carousel-tile">3</div>
    <div class="recommended-products-carousel-tile">4</div>
    <div class="recommended-products-carousel-tile">5</div>
    <div class="recommended-products-carousel-tile">6</div>
    <div class="recommended-products-carousel-tile">7</div>
    <div class="recommended-products-carousel-tile">8</div>
    <div class="recommended-products-carousel-tile">9</div>
    <div class="recommended-products-carousel-tile">10</div>
    <div class="recommended-products-carousel-tile">11</div>
    <div class="recommended-products-carousel-tile">12</div>
  </div>
</div>
<div class="latest-products-box">
  <h2 class="latest-products-header">Najnowsze produkty</h2>
  <ul class="latest-products d-flex flex-wrap">
    <?php
  		$args = array(
  			'post_type' => 'product',
  			'posts_per_page' => 9
  			);
  		$loop = new WP_Query( $args );
  		if ( $loop->have_posts() ) {
  			while ( $loop->have_posts() ) : $loop->the_post();
  				wc_get_template_part( 'content', 'product' );
  			endwhile;
  		} else {
  			echo __( 'No products found' );
  		}
  		wp_reset_postdata();
	   ?>
  </ul>
</div>
<?php get_footer(); ?>
