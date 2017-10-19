<?php get_header(); ?>

<div class="product-container d-flex col-12 col-md-6">
  <div class="owl-carousel product-gallery-carousel">
    <?php
    global $product;

    $attachment_ids = $product->get_gallery_attachment_ids();

    foreach( $attachment_ids as $attachment_id ):?>
        <div class="product-gallery-item" style="background-image:url('<?php echo wp_get_attachment_url( $attachment_id ); ?>')"></div>
    <?php endforeach; ?>
  </div>
  <div class="product-about">
    sdas
  </div>
</div>


<?php do_action('woocommerce_single_product_summary'); ?>
<?php do_action('woocommerce_after_single_product_summary'); ?>
<?php

?>
<?php get_footer(); ?>
