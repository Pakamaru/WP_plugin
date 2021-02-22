<?php
/**
 * @package RTMPlugin
 */
namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController
{
	public function register(){
		add_action('admin_enqueue_scripts', [$this, 'enqueue']);
	}

	public function enqueue(){
		wp_enqueue_style('rtmpluginstyle', $this->plugin_url . 'assets/style.css');
		wp_enqueue_script('rtmpluginscript', $this->plugin_url . 'assets/script.js');
	}
}