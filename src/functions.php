<?php

use Router\Router;

function hello()
{
    echo "hello";
}

function url($name)
{
    $router = new Router();
    return $router->generate($name);
}

function trans(string $file, string $key, string $attribute = null, string $additional = null)
{
    $trans = require(ROOT . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $file . '.php');
    $message = str_replace(':attribute', $attribute, $trans[$key]);
    $message = str_replace(':additional', $additional, $message);
    return $message;
}

function env($key, $default = null)
{
    return getenv($key) ?? $default;
}

function camelCase(string $string): string
{
    return str_replace('_', '', ucwords($string, '_'));
}
