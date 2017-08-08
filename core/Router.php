<?php 

namespace App\Core;

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
			throw new \Exception('没有定义该路由');
		}

		$this->callAction(
			...explode('@', $this->routes[$method][$uri])
		);
	}

	private function callAction($controller, $action)
	{
		$controller = 'App\\Controller\\' . $controller;
		$controller = new $controller;
		if(!method_exists($controller, $action)) {
			throw new \Exception("控制器{$controller}中未找到对应的处理{$action}");
		}

		$controller->$action();
	}
}