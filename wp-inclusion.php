<?php

/*
Plugin Name: WP Inclusion
Plugin URI: https://github.com/benjick/wp-inclusion
Description: Allows inclusion for any file. All files must be placed in your Wordpress installation folder and this is the set root for the plugin. E.g. if a file called test.php is placed in wp-content you call it with [wpincl file="wp-content/test.php"]. Good luck.
Author: Max Malm
Version: 1.0
Author URI: http://maxmalm.se
*/


function incl_func( $atts ) {
  extract( shortcode_atts( array(
		'file' => false,
	), $atts ) );
	
	include (ABSPATH . $file);
}
add_shortcode( 'wpincl', 'incl_func' );
