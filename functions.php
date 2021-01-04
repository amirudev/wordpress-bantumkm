<?php
$version = wp_get_theme()->get('version');

function wp_register_styles() {
	wp_enqueue_style('bantumkm_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', $version);
	wp_enqueue_style('bantumkm_style', get_template_directory_uri() . '/style.css', $version);
	wp_enqueue_style('raleway_fonts', get_template_directory_uri() . '/assets/fonts/Raleway-Regular.ttf', $version);
}
function wp_register_scripts() {
	wp_enqueue_script('bantumkm_script', get_template_directory_uri() . '/assets/js/script.js', $version);
}

// WordPress theme support
function wp_theme_support() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}

// Custom Post Type Product
function wp_custom_post_type_product() {
	$support = array(
		'title',
		'custom-fields',
		'editor',
		'thumbnail',
	);
	$labels = array(
		'name' => _x('Produk', 'plural'),
		'singular_name' => _x('Produk', 'singular'),
		'add_new' => _x('Tambah Produk', 'add new')
	);
	$args = array(
		'supports' => $support,
		'labels' => $labels,
		'description' => 'Add your product to be displayed on Product page',
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'product'),
		'has_archive' => true,
		'publicly_queryable' => true,
	);
	register_post_type('Products', $args);
}

// Custom Post Type Blog
function wp_custom_post_type_blog() {
	$support = array(
		'title',
		'editor',
		'thumbnail',
	);
	$labels = array(
		'name' => _x('Blog', 'plural'),
		'singular_name' => _x('Blog', 'singular'),
		'add_new' => _x('Tambah Blog', 'add new')
	);
	$args = array(
		'supports' => $support,
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'blog'),
		'has_archive' => true,
		'taxonomies' => array('post_tag'),
	);
	register_post_type('Blog', $args);
}

// ACF Add Local Fields
if( function_exists('acf_add_local_field_group') ){
	acf_add_local_field_group(
		array(
			'key' => 'price_group',
			'title' => 'Price',
			'fields' => array(
				array(
					'key' => 'price_field',
					'label' => 'Harga',
					'name' => 'Price',
					'type' => 'number'
				)
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'products'
					),
				),
			),
		)
	);
}

// Navigation Menu
function register_my_menus(){
	register_nav_menu(
		'header-menu', __('Header Menu')
	);
}

// Customize website functionality
add_action('wp_enqueue_scripts', 'wp_register_styles');
add_action('wp_enqueue_scripts', 'wp_register_scripts');
add_action('after_setup_theme', 'wp_theme_support');

// Registering post type
add_action('init', 'wp_custom_post_type_product');
add_action('init', 'wp_custom_post_type_blog');

// Registering nav menu
add_action('init', 'register_my_menus');

// Excerpt Configuration
add_filter('excerpt_length',function (){
	return 15;
});
add_filter('excerpt_more', function(){
	return ' ...';
})

?>