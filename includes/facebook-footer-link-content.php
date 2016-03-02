<?php

function ffl_add_footer($content){

	global $ffl_options;

	//Build the string to display the FB link
	$footer_output = '<hr>';
	$footer_output .= '<div class="footer_content">';
	$footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me On <a style="color:'.$ffl_options['link_color'].'" target="_blank" href="'.$ffl_options['facebook_url'].'">Facebook</a>';
	$footer_output .= '</div>';

	//Do we want this showing on a multi posts feed?
	if($ffl_options['show_in_feed']){
		if(is_single() || is_home() && $ffl_options['enable']){
			return $content . $footer_output;
		}
	} else {
		//No.  Just show on full (single_page) post
		if(is_single() && $ffl_options['enable']){
			return $content . $footer_output;
		}
	}

	// just return the post content if plugin is disabled
	return $content;

}

add_filter('the_content', 'ffl_add_footer');