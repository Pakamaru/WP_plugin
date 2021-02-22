<?php
/**
 * @package RTMPlugin
 */
namespace Inc;

final class Init
{
	/**
	 * Keeps all the classes used by this plugin in an array
	 * @return string[] all the classes
	 */
	public static function get_services(){
		return [
			Pages\Admin::class,
			Base\Enqueue::class,
			Base\SettingsLinks::class,


		];
	}

	private static function Instantiate($class){
		return new $class();
	}

	/**
	 * Goes through all the classes defined above and uses the register() function if they exist
	 */
	public static function register_services() {
		foreach (self::get_services() as $class){
			$service = self::instantiate($class);
			if ( method_exists( $service, 'register')){
				$service->register();
			}
		}
	}
}