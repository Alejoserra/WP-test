<?php
defined( 'ABSPATH' ) || die( 'Cheatin\' uh?' );

/**
 * Exercice 2
 */
/*
Plugin Name: Exercise 2
Description: Exercise 2
Author: Alejo Serra
Version: 1
*/

 
 
function disable_cache_for_admins() {
	if (current_user_can( 'administrator' ) ) {
		define( 'DONOTCACHEPAGE', true );
	}
}

add_action('init', 'disable_cache_for_admins');
?>