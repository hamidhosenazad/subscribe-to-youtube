<?php
/*
Plugin Name: Subscribe to YouTube
Description: Display youtube subscribe button and count
Version: 1.0.0
Author: Hamid Azad
Author URI: https://hamidazad.com
License: GPLv2 or later
*/
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}
//Load Scripts
require_once(plugin_dir_path( __FILE__ ).'/includes/youtube_sub_scripts.php');
//Load Class
require_once(plugin_dir_path( __FILE__ ).'/includes/youtube_sub_class.php');
// Register widget
function register_youtube_sub(){
	register_widget( 'youtube_sub_Widget' );
}

//Hook in function 
add_action( 'widgets_init', 'register_youtube_sub' );
