<?php
/**
 * @package RTMPlugin
 */
namespace Inc\Pages;

use \Inc\Base\BaseController;

class Admin extends BaseController
{

	public function register(){
		add_action('admin_menu', [$this, 'add_admin_page']);
	}

	public function add_admin_page(){
		add_menu_page('Rtm Plugin', 'Rtm', 'manage_options', 'rtm_plugin', [$this, 'admin_index'], 'dashicons-store', 110);
	}

	public function admin_index(){
		require_once $this->plugin_path . '/templates/admin.php';
	}
}