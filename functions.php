<?php
  require_once('libs/posttypes.php');

  function theme_css() {
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css');
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900&amp;subset=latin-ext', false, NULL, 'all' );
    wp_enqueue_style( 'style.min', get_template_directory_uri() . '/css/style.min.css', false, NULL, 'all' );
    wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, NULL, 'all' );
  }
  function theme_js() {
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/scripts/main.js');
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/scripts/carousel-config.js');
  }
  add_action( 'wp_enqueue_scripts', 'theme_css' );
  add_action( 'wp_enqueue_scripts', 'theme_js');
  add_filter('show_admin_bar', '__return_false');

  function remove_head_scripts() {
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);

  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
  }
  add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );


 ?>
