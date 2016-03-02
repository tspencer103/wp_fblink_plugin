<?php
/**
* Plugin Name: facebook footer link
* Description: Add FB link to end of posts
* Ver 1.0
* Author: Tim Spencer
*/

// Exit if direct access
if (!defined('ABSPATH')) {
	exit;
}

// Global Options Variable
$ffl_options = get_option('ffl_settings');
// Load Scripts
require_once(plugin_dir_path(__file__).'/includes/facebook-footer-link-scripts.php');
// Load content
require_once(plugin_dir_path(__file__).'/includes/facebook-footer-link-content.php');

if (is_admin()) {
//Load Settings
	require_once(plugin_dir_path(__file__).'/includes/facebook-footer-link-settings.php');
}
