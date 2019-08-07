<?php

namespace App\Controllers;

class AccountController extends BaseController
{
    public function index()
    {
        $this->render('account', ['user' => $_SESSION['logged']]);
    }
}
