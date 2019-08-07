<?php

namespace App\Controllers\Middleware;

class Middleware
{
    public function action()
    {
        echo 'Do stuff';
        exit;
    }
}
