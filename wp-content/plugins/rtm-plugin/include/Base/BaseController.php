<?php
/**
 * @package RTMPlugin
 */
namespace Inc\Base;

class BaseController
{
	public $plugin, $plugin_path, $plugin_url;

	public function __construct() {
		$this->plugin = plugin_basename(dirname(__FILE__, 3)) . '/rtm-plugin.php';
		$this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
		$this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));
	}
}