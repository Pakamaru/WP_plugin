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

class RtmPlugin
{
	public function __construct() {
		add_action('init', array($this, 'custom_post_type'));
	}

	function activate(){
		$this->custom_post_type();
		flush_rewrite_rules();
	}

	function deactivate(){

	}

	function uninstall(){

	}

	function custom_post_type(){
		register_post_type('book', ['label' => 'Books', 'public' => true, 'show_in_menu' => true]);
	}


}

if(class_exists('RtmPlugin')){
	$rtmPlugin = new RtmPlugin();
}

// activation
register_activation_hook( __FILE__, array($rtmPlugin, 'activate'));

// deactivation
register_deactivation_hook( __FILE__, array($rtmPlugin, 'deactivate'));

// uninstall