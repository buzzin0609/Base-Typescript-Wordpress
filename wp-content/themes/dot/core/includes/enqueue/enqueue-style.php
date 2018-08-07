<?php
/**
 * Main stylesheet enqueuing hook
 */

function iaaf_enqueue_style_scripts() {
	// Main Stylesheet
	wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans', 'font');
	wp_register_style('typekit', 'https://use.typekit.net/cnw8yzq.css', 'font');
	wp_enqueue_style('typekit');
	wp_enqueue_style('google-fonts');

	$mainName = get_template_directory_uri() . '/style.css';
	$mainPath = get_template_directory() . '/style.css';

	wp_register_style( 'main-style', $mainName, [], filemtime($mainPath) );
	wp_enqueue_style('main-style');
}
if (!is_admin()) {
	add_action( 'wp_enqueue_scripts', 'iaaf_enqueue_style_scripts', 10 );
}