<?php

//Custom Post type

function custom_portfolio() {
	$labels = array(
		'name'               => _x( 'Portfolios', 'post type general name', 'godo khaisha hiou' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'godo khaisha hiou' ),
		'menu_name'          => _x( 'Portfolios', 'admin menu', 'godo khaisha hiou' ),
		'name_admin_bar'     => _x( 'Portfolios', 'add new on admin bar', 'godo khaisha hiou' ),
		'add_new'            => _x( 'Add New', 'Portfolio', 'godo khaisha hiou' ),
		'add_new_item'       => __( 'Add New Portfolio', 'godo khaisha hiou' ),
		'new_item'           => __( 'New Portfolio', 'godo khaisha hiou' ),
		'edit_item'          => __( 'Edit Portfolio', 'godo khaisha hiou' ),
		'view_item'          => __( 'View Portfolio', 'godo khaisha hiou' ),
		'all_items'          => __( 'All Portfolios', 'godo khaisha hiou' ),
		'search_items'       => __( 'Search Portfolios', 'godo khaisha hiou' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'godo khaisha hiou' ),
		'not_found'          => __( 'No Portfolios found.', 'godo khaisha hiou' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'godo khaisha hiou' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'godo khaisha hiou' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 10,
		'menu_icon'           => 'dashicons-format-gallery',
		'supports'           => array( 'title', 'thumbnail')
	);

	register_post_type( 'portfolio', $args );

	$labels = array(
		'name'               => _x( 'Sliders', 'post type general name', 'godo khaisha hiou' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'godo khaisha hiou' ),
		'menu_name'          => _x( 'Sliders', 'admin menu', 'godo khaisha hiou' ),
		'name_admin_bar'     => _x( 'Sliders', 'add new on admin bar', 'godo khaisha hiou' ),
		'add_new'            => _x( 'Add New', 'Slider', 'godo khaisha hiou' ),
		'add_new_item'       => __( 'Add New Slider', 'godo khaisha hiou' ),
		'new_item'           => __( 'New Slider', 'godo khaisha hiou' ),
		'edit_item'          => __( 'Edit Slider', 'godo khaisha hiou' ),
		'view_item'          => __( 'View Slider', 'godo khaisha hiou' ),
		'all_items'          => __( 'All Sliders', 'godo khaisha hiou' ),
		'search_items'       => __( 'Search Sliders', 'godo khaisha hiou' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'godo khaisha hiou' ),
		'not_found'          => __( 'No Sliders found.', 'godo khaisha hiou' ),
		'not_found_in_trash' => __( 'No Sliders found in Trash.', 'godo khaisha hiou' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'godo khaisha hiou' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'           => 'dashicons-images-alt',
		'supports'           => array( 'title', 'thumbnail')
	);

	register_post_type( 'slider', $args );


	$labels = array(
		'name'               => _x( 'Clients Logos', 'post type general name', 'godo khaisha hiou' ),
		'singular_name'      => _x( 'Client Logo', 'post type singular name', 'godo khaisha hiou' ),
		'menu_name'          => _x( 'Clients Logos', 'admin menu', 'godo khaisha hiou' ),
		'name_admin_bar'     => _x( 'Clients Logos', 'add new on admin bar', 'godo khaisha hiou' ),
		'add_new'            => _x( 'Add New', 'Client Logo', 'godo khaisha hiou' ),
		'add_new_item'       => __( 'Add New Client Logo', 'godo khaisha hiou' ),
		'new_item'           => __( 'New Client Logo', 'godo khaisha hiou' ),
		'edit_item'          => __( 'Edit Client Logo', 'godo khaisha hiou' ),
		'view_item'          => __( 'View Client Logo', 'godo khaisha hiou' ),
		'all_items'          => __( 'All Clients Logos', 'godo khaisha hiou' ),
		'search_items'       => __( 'Search Clients Logos', 'godo khaisha hiou' ),
		'parent_item_colon'  => __( 'Parent Clients Logos:', 'godo khaisha hiou' ),
		'not_found'          => __( 'No Clients Logos found.', 'godo khaisha hiou' ),
		'not_found_in_trash' => __( 'No Clients Logos found in Trash.', 'godo khaisha hiou' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'godo khaisha hiou' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Client Logo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'           => 'dashicons-image-filter',
		'supports'           => array( 'title', 'thumbnail')
	);

	register_post_type( 'client_logo', $args );
}
add_action( 'init', 'custom_portfolio' );


// create two taxonomies, genres and writers for the post type "book"
function create_portfolio_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Portfolios Category', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Portfolio', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Portfolios', 'textdomain' ),
		'all_items'         => __( 'All Portfolios', 'textdomain' ),
		'parent_item'       => __( 'Parent Portfolio', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'textdomain' ),
		'edit_item'         => __( 'Edit Portfolio', 'textdomain' ),
		'update_item'       => __( 'Update Portfolio', 'textdomain' ),
		'add_new_item'      => __( 'Add New Portfolio', 'textdomain' ),
		'new_item_name'     => __( 'New Portfolio Name', 'textdomain' ),
		'menu_name'         => __( 'Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio' ),
	);

	register_taxonomy( 'Portfolio', array( 'portfolio' ), $args );
	
}
	
add_action( 'init', 'create_portfolio_taxonomies', 0 );
	
	
?>