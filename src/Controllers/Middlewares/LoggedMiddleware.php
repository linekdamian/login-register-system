<?php

namespace App\Controllers\Middleware;

use Router\Router;

class LoggedMiddleware extends Middleware
{
    public function action()
    {
        if (!$_SESSION['logged']) {
            return Router::redirect(url('login'));
        }
    }
}
