<?php

class Route {

	private static $routes = [];

	public static function add($paths, $function) {

		$paths = (array) $paths;

		foreach ($paths as $path)
			array_push(self::$routes, [
				'path' => __CLIENT_ROOT__ . $path,
				'function' => $function,
			]);
	}

	public static function run() {

		$path_found = false;
		$path = parse_url($_SERVER['REQUEST_URI'])['path'];

		foreach (self::$routes as $route) {
			if ((in_array($path, [$route['path'], $route['path'] . '/'])) || (strpos($route['path'], '*') && strpos($path, rtrim($route['path'], '/*')) !== false)) {
				$path_found = true;
				call_user_func_array($route['function'], [$path]);
				break;
			}
		}

		//error 404
		if (!$path_found) {
			$view = new View('errors/404');
			$view->title = 'Error 404';
			$view->template = 'void';
			$view->middlewares = [];
			$view->show();
		}
	}
}
