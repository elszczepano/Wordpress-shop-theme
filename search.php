<?php get_header(); ?>
<div class="catalog-products-box">
  <h2 class="catalog-products-header"><?php printf( __( 'Wyniki wyszukwania dla: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
  <ul class="catalog-products d-flex flex-wrap">
    <?php
      $args = array(
        'post_type' => 'product',
        's'=> get_search_query()
      );
      $loop = new WP_Query( $args );
      if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
          wc_get_template_part( 'content', 'product' );
        endwhile;
      } else {
        echo __( 'Nie znaleziono produktów.' );
      }
      wp_reset_postdata();
      ?>
 </ul>
</div>
<?php get_footer(); ?>
