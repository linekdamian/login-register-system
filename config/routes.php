<?php

return [
    "home" => ["HomeController@index", "/"],
    "login" => ["AuthController@login", "/login"],
    "logout" => ["AuthController@logout", "/logout"],
    "authorize" => ["AuthController@authorize", "/login", "POST"],
    "register" => ["AuthController@register", "/register"],
    "register.store" => ["AuthController@store", "/register", "POST"],
    "account" => ["AccountController@index", "/account", "GET", "middleware" => ["Logged"]]
];
