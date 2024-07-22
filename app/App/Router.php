<?php

namespace ECommerce\Shoping\App;

require_once __DIR__ . '/Config.php';

class Router {
    private static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function, array $middlewares = []) {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middlewares
        ];
    }

    public static function run() {
        $path = "/";
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";
            if (preg_match($pattern, $path, $variables) && $method == $route['method']) {
                // echo "CONTROLLER : " . $route['controller'] . "<br> FUNCTION : " . $route['function'];
                
                foreach ($route['middleware'] as $middleware) {
                    $instance = new $middleware;
                    $instance->before();
                }

                $controller = new $route['controller'];
                $function = $route['function'];
                
                array_shift($variables);
                call_user_func_array([$controller, $function], $variables);

                return;
            }
        }

        http_response_code(404);
        header('Location: ' . BASE_URL . '/404');
        exit();
    }
}