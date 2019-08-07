<?php

namespace App\Controllers;

use Request\Request;

class BaseController
{
    protected $request;

    protected $model;

    protected $repository;

    public function getRepository()
    {
        return new $this->repository;
    }

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function error404()
    {
        $error['code'] = '404';
        $error['message'] = 'Page not found.';
        $this->render('error', ['error' => $error]);
    }

    public function render(string $view, array $vars = [])
    {
        $old = $this->request->post;
        extract($vars);
        ob_start();
        require(ROOT . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR  . 'index.php');
        $content = ob_get_clean();
        echo $content;
    }
}
