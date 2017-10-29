<?php get_header(); ?>
<?php do_action('woocommerce_before_cart');?>
<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
  <?php do_action( 'woocommerce_before_cart_table' ); ?>
  <table class="cart-table container">
    <thead>
      <tr class="row">
  				<th class="col-2 product-thumbnail">&nbsp;</th>
  				<th class="col-6 product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
  				<th class="col-2 product-price"><?php _e( 'Price', 'woocommerce' ); ?></th>
  				<th class="col-1 product-quantity"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
          <th class="col-1 product-remove">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <?php do_action( 'woocommerce_before_cart_contents' ); ?>
      <?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ):
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ):
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
			?>
      <tr class="row product-row woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
        <td class="col-2 product-thumbnail">
          <?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
						if ( ! $product_permalink ) {
							echo $thumbnail;
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
						}
					?>
        </td>
        <td class="col-6 product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
          <?php
						if ( ! $product_permalink ) {
							echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;';
						} else {
							echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key );
						}
						echo WC()->cart->get_item_data( $cart_item );
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
						}
					?>
        </td>
        <td class="col-2 product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
					<?php
						echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
					?>
				</td>
        <td class="col-1 product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
          <?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" >', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input( array(
								'input_name'    => "cart[{$cart_item_key}][qty]",
								'input_value'   => $cart_item['quantity'],
								'max_value'     => $_product->get_max_purchase_quantity(),
								'min_value'     => '0',
								'product_name'  => $_product->get_name(),
							), $_product, false );
						}
						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
					 ?>
          </td>
          <td class="col-1 product-remove">
  					<?php
  						echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
  							'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><span class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Usuń z koszyka"></span></a>',
  							esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
  							__( 'Remove this item', 'woocommerce' ),
  							esc_attr( $product_id ),
  							esc_attr( $_product->get_sku() )
  						), $cart_item_key );
  					?>
  				</td>
      </tr>
      <?php endif; endforeach; ?>
      <?php do_action( 'woocommerce_cart_contents' ); ?>
      <tr>
				<td class="actions d-flex justify-content-between">
					<?php if ( wc_coupons_enabled() ): ?>
            <div class="col-5 input-group coupon">
              <input type="text" name="coupon_code" id="coupon_code" class="input-text form-control" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" aria-label="Search for...">
              <span class="input-group-btn">
                <button class="btn theme-layout button " name="apply_coupon" type="submit"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
              </span>
              <?php do_action( 'woocommerce_cart_coupon' ); ?>
            </div>
					<?php endif; ?>
          <div class="col-2">
            <button class="btn theme-layout button " name="update_cart" type="submit"><?php esc_attr_e( 'Update cart', 'woocommerce' ); ?></button>
  					<?php do_action( 'woocommerce_cart_actions' ); ?>
          </div>
					<?php wp_nonce_field( 'woocommerce-cart' ); ?>
				</td>
			</tr>
      <?php do_action('woocommerce_after_cart_contents'); ?>
    </tbody>
    <?php do_action( 'woocommerce_after_cart_table' ); ?>
  </table>
</form>
<div class="cart-collaterals">
	<?php do_action( 'woocommerce_cart_collaterals' ); ?>
</div>
<?php do_action( 'woocommerce_after_cart' ); ?>
<?php get_footer(); ?>
