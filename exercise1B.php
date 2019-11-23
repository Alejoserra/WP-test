<?php
defined( 'ABSPATH' ) || die( 'Cheatin\' uh?' );

/**
 * Exercice 1.B
 */

 /*
Plugin Name: Exercise 1B
Description: Exercise 1B
Author: Alejo Serra
Version: 1
*/

 
 
function rocket_clean_host_after_rocket() {
	managed_clear_cache();
}

add_action('after_rocket_clean_domain', 'rocket_clean_host_after_rocket');
?>