<?php
$version = wp_get_theme()->get('version');

function wp_register_styles() {
	wp_enqueue_style('bantumkm_bootstrap', get_template_directory_uri() . '/assets/bootstrap-5.0.0-beta/css/bootstrap.min.css', $version);
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
	add_theme_support('custom-logo', array(
		'height' => 200,
		'width' => 400
	));
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

// Customize Register Contacts
function wp_customize_register_contactsinfo($wp_customize) {
	$wp_customize->add_section('wp_contactinfo_section', array(
		'title' => 'Informasi Kontak',
		'priority' => 30
	));

	$wp_customize->add_setting('wp_contactinfo-contact', array());
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'wp_contactinfo_control',
		array(
			'label' => __('Informasi Kontak', 'wp'),
			'description' => 'Akan digunakan sebagai link menuju WhatsApp kamu disetiap produk, gunakan 62xx',
			'section' => 'wp_contactinfo_section',
			'settings' => 'wp_contactinfo-contact',
			'priority' => 1
		)
	));
}

// Customize Register GreetingsOrder
function wp_customize_register_greetingsorder($wp_customize) {
	$wp_customize->add_section('wp_greetingsorder_section', array(
		'title' => 'Kata Sapaan Orderan',
		'priority' => 30
	));

	$wp_customize->add_setting('wp_greetingsorder-text', array());
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'wp_greetingsorder_control',
		array(
			'label' => __('Sapaan Untuk Pelanggan', 'wp'),
			'description' => 'Digunakan sebagai perkataan sapaan untuk pelanggan saat memesan barang ( Contoh : Halo, Selamat Pagi )',
			'section' => 'wp_greetingsorder_section',
			'settings' => 'wp_greetingsorder-text',
			'priority' => 1
		)
	));
}

// Bootstrap a button post link
function post_link_attributes_bootsbutton() {
	return 'class="btn btn-primary"';
}

// Excerpt Limit
function wp_custom_excerpt_limit($length) {
	return 20;
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

// Register Customize Register
add_action('customize_register', 'wp_customize_register_contactsinfo');
add_action('customize_register', 'wp_customize_register_greetingsorder');

// Excerpt Configuration
add_filter('excerpt_more', function(){
	return ' ...';
});

// Applying excerpt limit
add_filter('excerpt_length', 'wp_custom_excerpt_limit');

// Applying Bootstrap Button Style post_link
add_filter('next_posts_link_attributes', 'post_link_attributes_bootsbutton');
add_filter('previous_posts_link_attributes', 'post_link_attributes_bootsbutton');
?>