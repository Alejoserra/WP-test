<?php
defined( 'ABSPATH' ) or die('Cheatin\' uh?');

/**
 * Exercice 1.A
 */
/*
Plugin Name: Exercise 1A
Description: Exercise 1A
Author: Alejo Serra
Version: 1
*/

 add_filter( 'do_rocket_generate_caching_files', '__return_false' );
?>