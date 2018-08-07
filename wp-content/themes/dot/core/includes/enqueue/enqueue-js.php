<?php
/**
 * Add base js to wp_head
 */

if (!defined('ABSPATH')) {
	exit;
}

function project_enqueue_main_js()
{
	//polyfill.io
	wp_register_script('polyfill.io', 'https://cdn.polyfill.io/v2/polyfill.min.js?features=default,Array.prototype.find,String.prototype.padStart');
	$mainPath = sprintf('%s/build/bundle.js', get_template_directory());
	$mainUri = sprintf('%s/build/bundle.js', get_template_directory_uri());

	if (file_exists($mainPath)) {
		// Main JS Script
		wp_register_script('main-js', $mainUri, ['polyfill.io'], filemtime($mainPath), true);
		wp_enqueue_script('main-js');

		// Localise Scripts
		wp_localize_script('main-js', 'site', array(
			'ajax' => admin_url('admin-ajax.php'),
			'url' => get_bloginfo('url'),
			'path' => get_bloginfo('template_directory'),
			'imgPath' => get_bloginfo('template_directory') . '/img'
		));
	}

}

if (!is_admin()) {
	add_action('wp_enqueue_scripts', 'project_enqueue_main_js', 10);
}