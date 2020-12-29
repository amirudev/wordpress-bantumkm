<?php
function wp_register_styles() {
	wp_enqueue_style('bantumkm', get_template_directory_uri() . '/style.css', '1.0');
	wp_enqueue_style('bantumkm_font', 'https://fonts.googleapis.com/css2?family=Raleway&display=swap');
}

add_action('wp_enqueue_scripts', 'wp_register_styles');
?>