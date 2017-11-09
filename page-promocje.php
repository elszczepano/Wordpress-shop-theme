<?php get_header(); ?>
<div class="static-page-wrapper">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2 class="static-page-header"><?php echo get_the_title(); ?></h2>
    <div class="static-page-content">
      <?php the_content(); ?>
      <div class="catalog-products-box">
        <ul class="catalog-products d-flex flex-wrap">
        <?php
          global $product;
      		$args = array(
      			'post_type' => 'product',
      			);
      		$loop = new WP_Query( $args );
      		if ( $loop->have_posts() ) {
      			while ( $loop->have_posts() ) : $loop->the_post();
            if( $product->is_on_sale() ) {
              wc_get_template_part( 'content' , 'product' );
            }
      			endwhile;
      		} else {
      			echo __( 'Nie znaleziono produktów.' );
      		}
      		wp_reset_postdata();
    	   ?>
        </ul>
      </div>
    </div>
  <?php endwhile; ?>
  <?php else: ?>
    <div>
      <h2 class="err-page-header">Brak zawartości do wyświetlenia</h2>
      <a class="err-page-link" href="<?php echo home_url(); ?>">strona główna</a>
    </div>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
