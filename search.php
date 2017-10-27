<?php get_header(); ?>
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
<?php get_footer(); ?>
