<?php
/*
Plugin Name: Allow Underscores in Short URLs
Plugin URI: http://desouzainstitute.com
Description: Allow Underscores in short URLs (like <tt>http://sho.rt/hello_world</tt>)
Version: 1.0
Author: Mathew Gancarz
Author URI: http://desouzainstitute.com
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_filter( 'get_shorturl_charset', 'ozh_hyphen_in_charset' );
function ozh_hyphen_in_charset( $in ) {
	return $in.'_';
}


