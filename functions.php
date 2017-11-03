<?php
  require_once('libs/posttypes.php');
  require_once('libs/utils.php');

  function theme_css() {
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css');
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900&amp;subset=latin-ext');
    wp_enqueue_style( 'style.min', get_template_directory_uri() . '/css/style.min.css');
    wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'owl_min', get_template_directory_uri().'/libs/owlcarousel/dist/assets/owl.carousel.min.css');
    wp_enqueue_style( 'owl_theme_default', get_template_directory_uri().'/libs/owlcarousel/dist/assets/owl.theme.default.min.css');
  }
  function theme_js() {
    wp_enqueue_script( 'jq', 'https://code.jquery.com/jquery-3.2.1.min.js');
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js');
    wp_enqueue_script( 'owl_js', get_template_directory_uri() . '/libs/owlcarousel/dist/owl.carousel.min.js');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/scripts/main.js');
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/scripts/carousel-config.js');
    if(is_product_category()) {
        wp_enqueue_script('category', get_template_directory_uri() . '/scripts/category.js');
    }
    if(is_home()||is_product_category()||is_search()) {
        wp_enqueue_script('home-gallery', get_template_directory_uri() . '/scripts/catalog.js');
    }
    if ( is_checkout() ) {
  		wp_enqueue_script('checkout', get_template_directory_uri() . '/scripts/checkout.js');
  	}
    if (is_account_page()) {
      wp_enqueue_script('my-account', get_template_directory_uri() . '/scripts/my-account.js');
    }
  }
  add_action('wp_enqueue_scripts', 'theme_css' );
  add_action('wp_enqueue_scripts', 'theme_js');
  add_filter('show_admin_bar', '__return_false');

  function remove_head_scripts() {
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);

  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
  }
  add_action( 'wp_enqueue_scripts', 'remove_head_scripts');

  add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
    }
  } );
 ?>
