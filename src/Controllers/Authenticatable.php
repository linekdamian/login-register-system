<?php

namespace App\Controllers;

use App\Models\User;

trait Authenticatable
{
    public function attempt(string $email, string $password): ?User
    {
        if ($user = $this->getRepository()->findOneByEmail($email)) {
            if ($this->checkPassword($user, $password)) {
                $_SESSION['logged'] = $user;
                return $user;
            }
        }
        return null;
    }

    public function checkPassword(User $user, string $password)
    {
        return password_verify($password, $user->getPassword());
    }

    public function unsetSession()
    {
        unset($_SESSION['logged']);
    }
}
