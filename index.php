<?php get_header(); ?>
<div class="promo-carousel-box">
      <span class="fa fa-arrow-left promo-prev" aria-hidden="true"></span>
      <span class="fa fa-arrow-right promo-next" aria-hidden="true"></span>
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
  <div class="recommended-controls">
    <span class="fa fa-arrow-left recommended-prev d-none d-xl-inline" aria-hidden="true"></span>
    <span class="fa fa-arrow-right recommended-next d-none d-xl-inline" aria-hidden="true"></span>
  </div>
  <h2 class="recommended-products-header">Polecane produkty</h2>
  <div class="owl-carousel recommended-products-carousel">
    <?php
        if($recommended_slider): foreach( $recommended_slider as $product ):?>
        <a href="<?php echo get_the_permalink($product); ?>">
          <div class="recommended-products-carousel-tile">
            <h2 class="recommended-products-heading"><?php echo get_the_title($product); ?></h2>
            <div class="recommended-product-thumbnail" style="background-image:url('<?php echo get_the_post_thumbnail_url($product); ?>')"></div>
            <h3 class="recommended-product-price" data-toggle="tooltip" data-placement="bottom" title="Zobacz ofertę"><?php echo ($product->_regular_price) . " " . get_woocommerce_currency_symbol(); ?></h3>
          </div>
        </a>
    <?php endforeach; endif; ?>
  </div>
</div>
<div class="catalog-products-box">
  <h2 class="catalog-products-header">Najnowsze produkty</h2>
  <ul class="catalog-products d-flex flex-wrap">
    <?php
  		$args = array(
  			'post_type' => 'product',
  			'posts_per_page' => 9
  			);
  		$loop = new WP_Query( $args );
  		if ( $loop->have_posts() ) {
  			while ( $loop->have_posts() ) : $loop->the_post();
  				wc_get_template_part( 'content' , 'product' );
  			endwhile;
  		} else {
  			echo __( 'Nie znaleziono produktów.' );
  		}
  		wp_reset_postdata();
	   ?>
  </ul>
</div>
<?php get_footer(); ?>
