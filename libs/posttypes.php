<?php
add_theme_support( 'post-thumbnails' );

function slider_content_init() {
    $labels = array(
        'name'                  => _x( 'Slider', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Slajd', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Slider', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Dodaj nowy', 'textdomain' ),
        'add_new_item'          => __( 'Dodaj nowy slajd', 'textdomain' ),
        'new_item'              => __( 'Nowy slajd', 'textdomain' ),
        'edit_item'             => __( 'Edytuj slajd', 'textdomain' ),
        'view_item'             => __( 'Zobacz slajd', 'textdomain' ),
        'all_items'             => __( 'Wszystkie slajdy', 'textdomain' ),
        'search_items'          => __( 'Wyszukaj', 'textdomain' ),
        'parent_item_colon'     => __( 'Powiązane slajdy', 'textdomain' ),
        'not_found'             => __( 'Nie znaleziono', 'textdomain' ),
        'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'textdomain' ),
        'featured_image'        => _x( 'Obrazek wyróżniający', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Ustaw obrazek wyróżniający', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Usuń obrazek wyróżniający', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Użyj jako obrazek wyróżniający', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Archiwum', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Dodaj do slajdów', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Dołączone do slajdu', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filtruj slajdy', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Nawigacja slajdami', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Lista slajdów', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slide' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'slide', $args );
}

add_action( 'init', 'slider_content_init' );

//for custom loop
$slider_args = array( 'post_type' => 'slide');
$slider_loop = new WP_Query( $slider_args );

 ?>
