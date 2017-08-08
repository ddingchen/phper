<?php 

namespace App\Core;

class App
{
	private static $registry = [];

	public static function bind($key, $value)
	{
		static::$registry[$key] = $value; 
	}

	public static function get($key)
	{
		if(!array_key_exists($key, static::$registry)) {
			throw new \Exception('未能找到对应的依赖组件');
		}
		return static::$registry[$key];
	}
}