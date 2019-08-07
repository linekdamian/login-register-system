<?php

require '../vendor/autoload.php';

use Router\Router;
use Request\Request;
use Environment\Environment;
use Database\Database;

define('ROOT', dirname(__DIR__));

try {
    session_start();

    $router = new Router;
    $request = new Request;
    $env = new Environment;

    $current = $router->execute();

    $controllerName = sprintf('App\Controllers\%s', $current['controller']);

    foreach ($current['middleware'] as $middleware) {
        $action = sprintf('App\Controllers\Middleware\%sMiddleware', $middleware);
        $action::action('test', 'test2', 'test3');
    }

    $controller = new $controllerName($request);

    $controller->{$current['action']}();
} catch (\Throwable $throwable) {
    xdebug_print_function_stack($throwable);
}
