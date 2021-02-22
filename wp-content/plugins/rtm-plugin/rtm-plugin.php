<?php
/**
 * @package RTMPlugin
 */
/*
Plugin Name: RTM Plugin
Plugin URI: http://localhost/testsite/
Description: This is a test of making a plugin for WordPress
Version: 1.0.0
Author: Amaru Signore
Author URI: https://www.rtmbusiness.nl/
License: GPLv2 or later
Text Domain: rtm-plugin
 */

if ( ! defined( 'ABSPATH') ){
	die;
}

if( file_exists( dirname(__FILE__) . '/vendor/autoload.php')){
	require_once dirname(__FILE__) . '/vendor/autoload.php';
}

function activate_rtm_plugin(){
	Inc\Base\Activate::activate();
}

function deactivate_rtm_plugin(){
	Inc\Base\Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'activate_rtm_plugin');
register_deactivation_hook(__FILE__, 'deactivate_rtm_plugin');

if ( class_exists('Inc\Init')){
	Inc\Init::register_services();
}


//		protected function create_post_type(){
//			add_action('init', [$this, 'custom_post_type']);
//		}
//
//		function custom_post_type(){
//			register_post_type('book', ['label' => 'Books', 'public' => true, 'show_in_menu' => true]);
//		}