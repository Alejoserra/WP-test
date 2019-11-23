<?php
defined( 'ABSPATH' ) || die( 'Cheatin\' uh?' );

/**
 * Exercice 3.A
 */

 /*
Plugin Name: Exercise 3A
Description: Exercise 3A
Author: Alejo Serra
Version: 1
*/

 
 
function country_defined_cookie($cookies) {
	$cookies[] = 'origin_country';
	return $cookies;
}

add_filter('rocket_cache_mandatory_cookies', 'country_defined_cookie');
?>