<?php
//remove unnecessary functions
function unregister_tags() {
    unregister_taxonomy_for_object_type( 'post_tag' , 'post' );
}
add_action( 'init' , 'unregister_tags' );

add_action('init' , function() {
    register_taxonomy('product_tag', 'product', [
        'public'            => false,
        'show_ui'           => false,
        'show_admin_column' => false,
        'show_in_nav_menus' => false,
        'show_tagcloud'     => false,
    ]);
}, 100);

add_action( 'admin_init' , function() {
    add_filter('manage_product_posts_columns', function($columns) {
        unset($columns['product_tag']);
        return $columns;
    }, 100);
});

add_filter( 'woocommerce_product_tabs' , 'wcs_woo_remove_reviews_tab' , 98 );
    function wcs_woo_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    return $tabs;
  }

remove_action( 'woocommerce_after_single_product_summary' , 'woocommerce_output_related_products', 20 );

function remove_posts_menu() {
    remove_menu_page('edit.php');
}
add_action('admin_init' , 'remove_posts_menu');

function unregister_categories() {
    register_taxonomy( 'category' , array() );
}
add_action( 'init', 'unregister_categories' );

//Advanced Custom Fields - recommended products
$recommended_slider = get_posts(array(
  'post_type' 	  => 'product',
  'key'     => 'main_site_recommend',
  'numposts'	  => -1,
  'post_status'	  => 'publish',
  'orderby'	  => 'title',
  'order'         => 'ASC',
  'value'	=> 'tak'
));
function hide_coupon_field_on_checkout( $enabled ) {
	if ( is_checkout() ) {
		$enabled = false;
	}
	return $enabled;
}
add_filter( 'woocommerce_coupons_enabled' , 'hide_coupon_field_on_checkout' );
add_filter( 'woocommerce_enable_order_notes_field' , '__return_false' );

function woocommerce_account_menu_items($items) {
    unset( $items['downloads'] );
    return $items;
}
add_filter('woocommerce_account_menu_items', 'woocommerce_account_menu_items', 10, 1);
add_action('check_admin_referer', 'logout_without_confirm', 10, 2);

function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDGUrA5Er1HFiVjt6Wk13J4b7gp8sJceC4';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
?>
