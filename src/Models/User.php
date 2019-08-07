<?php

namespace App\Models;

class User extends Model
{
    public function __construct(array $data = [])
    {
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->name = $data['name'];
        // $this->setEmail($data['email']);
        // $this->setPassword($data['password']);
        // $this->setName($data['name']);
        parent::__construct($data);
    }

    private $email;

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    private $password;

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $options = [
            'cost' => 10,
        ];

        $this->password = password_hash($password, PASSWORD_BCRYPT, $options);;

        return $this;
    }

    private $name;

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
