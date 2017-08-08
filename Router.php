<?php 

class Router
{
	private $routes = [];

	public static function load($file)
	{
		$route = new static;
		$route->routes = require $file;
		return $route;
	}

	public function direct()
	{
		$uri = trim($_SERVER['REQUEST_URI'], '/');
		if(!array_key_exists($uri, $this->routes)) {
			throw new Exception('没有定义该路由');
		}
		return $this->routes[$uri];
	}
}