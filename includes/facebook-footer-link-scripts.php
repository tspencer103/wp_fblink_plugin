<?php

// Just loading css and js scripts here

function ffl_add_scripts() {

	wp_enqueue_style('ffl-main-style', plugins-url . '/facebook-footer-link/css/style.css');
	wp_enqueue_script('ffl-main-script', plugins_url() . '/facebook-footer-link/js/main.js');
}

add_action('wp_enqueue_scripts', 'ffl_add_scripts');

