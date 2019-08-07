<?php

namespace App\Controllers;

use Validator\Validator;
use App\Models\User;
use Request\Request;
use App\Repository\UserRepository;
use Router\Router;

class AuthController extends BaseController
{
    use Authenticatable;

    public function __construct(Request $request)
    {
        $this->repository = UserRepository::class;
        parent::__construct($request);
    }

    public function login()
    {
        return $this->render('login');
    }

    public function logout()
    {
        $this->unsetSession();
        Router::redirect(url('home'));
    }

    public function authorize()
    {
        $validator = new Validator;
        $validator->validate(
            $this->request->post,
            [
                'email' => 'email|required',
                'password' => 'required',
            ]
        );

        if ($validator->isError()) {
            return $this->render('login', ['errors' => $validator->getErrors()]);
        }

        if ($user = $this->attempt($this->request->post['email'], $this->request->post['password'])) {
            Router::redirect(url('account'));
        }

        return $this->render('login', ['errors' => ['failed' => ['These credentials do not match our records.']]]);
    }

    public function register()
    {
        return $this->render('register');
    }

    public function store()
    {
        $validator = new Validator;

        $validator->validate(
            $this->request->post,
            [
                'email' => 'email|min:6|required|unique:USERS,email',
                'password' => 'min:6|required',
                'repeatPassword' => 'same:password|required',
                'rules' => 'required',
            ]
        );

        if ($validator->isError()) {
            return $this->render('register', ['errors' => $validator->getErrors()]);
        }

        $user = new User($this->request->post);
        $user->setPassword($this->request->post['password']);

        if ($this->getRepository()->save($user)) {
            return $this->render('home', ['msg' => 'Registration has been successful']);
        }

        return $this->render('register', ['msg' => 'Registration has been failed']);
    }
}
