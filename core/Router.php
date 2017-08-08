<?php 

class Router
{
	private $routes = [];

	public static function load($file)
	{
		$route = new static;
		require $file;
		return $route;
	}

	public function define($uri, $action, $method)
	{
		$this->routes[$method][$uri] = $action;
	}

	public function get($uri, $action)
	{
		$this->define($uri, $action, 'GET');
	}

	public function post($uri, $action)
	{
		$this->define($uri, $action, 'POST');
	}

	public function direct()
	{
		$uri = Request::uri();
		$method = Request::method();
		if(!array_key_exists($uri, $this->routes[$method])) {
			throw new Exception('没有定义该路由');
		}
		return $this->routes[$method][$uri];
	}
}