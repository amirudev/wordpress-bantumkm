<?php
function wp_register_styles() {
	wp_enqueue_style('bantumkm_style', get_template_directory_uri() . '/style.css', '1.0');
	wp_enqueue_style('bantumkm_font', 'https://fonts.googleapis.com/css2?family=Raleway&display=swap');
}

// function wp_register_scripts() {
// 	wp_enqueue_script('bantumkm_script', get_template_directory_uri() . '/assets/js/script.js');
// }

add_action('wp_enqueue_scripts', 'wp_register_styles');
// add_action('wp_enqueue_scripts', 'wp_register_scripts');
?>