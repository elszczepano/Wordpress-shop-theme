<?php get_header(); ?>
<?php do_action( 'woocommerce_before_single_product' ); ?>
<div class="product-container row d-flex flex-wrap">
      <div class="col-12 col-lg-6 owl-carousel product-gallery-carousel">
        <?php
        $product = new WC_Product(get_the_id());
        $attachment_ids = $product->get_gallery_image_ids();
        foreach( $attachment_ids as $attachment_id ):?>
            <div class="product-gallery-item" style="background-image:url('<?php echo wp_get_attachment_url( $attachment_id ); ?>')"></div>
        <?php endforeach; ?>
    </div>
    <div class="col-12 col-lg-6 product-about">
      <?php do_action('woocommerce_single_product_summary'); ?>
      <?php if($product->get_stock_quantity()!=NULL): ?>
      <span class="stock">Na magazynie: <span class="stock-quantity"><?php echo $product->get_stock_quantity(); ?></span> szt.</span>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="product-summary">
    <div class="product-description">
      <?php echo $product->get_description();  ?>
    </div>
    <div class="product-tabs">
      <?php echo woocommerce_product_additional_information_tab();  ?>
    </div>
  </div>
<?php get_footer(); ?>
