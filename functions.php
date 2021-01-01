<?php
$version = wp_get_theme()->get('version');

function wp_register_styles() {
	wp_enqueue_style('bantumkm_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', $version);
	wp_enqueue_style('bantumkm_style', get_template_directory_uri() . '/style.css', $version);
}
function wp_register_scripts() {
	wp_enqueue_script('bantumkm_script', get_template_directory_uri() . '/assets/js/script.js', $version);
}

// WordPress theme support
function wp_theme_support() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}

// Customize website functionality
add_action('wp_enqueue_scripts', 'wp_register_styles');
add_action('wp_enqueue_scripts', 'wp_register_scripts');
add_action('after_setup_theme', 'wp_theme_support');

// Excerpt Configuration
add_filter('excerpt_length',function (){
	return 15;
});
add_filter('excerpt_more', function(){
	return ' ...';
})

?>