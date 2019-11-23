<?php
defined( 'ABSPATH' ) || die( 'Cheatin\' uh?' );

/**
 * Exercice 3.B
 */

 /*
Plugin Name: Exercise 3B
Description: Exercise 3B
Author: Alejo Serra
Version: 1
*/

 
 
// Specify your custom cache folder (must include inside country names e.g: Argentina, Mexico, France, Germany). 
define( 'COUNTRY_CACHE_PATH',$_SERVER['DOCUMENT_ROOT'] . 'new-path/cache/' );
// Specify the URL to the custom cache folder. 
define( 'COUNTRY_CACHE_URL','http://domain.com/new-path/cache/' );

function country_specific_cache() {
	$country=IIF(empty($_COOKIE["origin_country"]),'',$_COOKIE["origin_country"]);
	// checking if the specific country folder exists to assign new cache path
	if (file_exists(COUNTRY_CACHE_PATH . $country)) {
		define('WP_ROCKET_CACHE_ROOT_PATH' ,COUNTRY_CACHE_PATH  .  $country);
		}
	}
add_filter('rocket_advanced_cache_file', 'country_specific_cache' );
?>