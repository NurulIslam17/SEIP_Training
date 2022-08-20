<?php

namespace App\classes;

class Auth
{
    public $userEmail,$userPassword;
    public $email,$password;
    public function __construct($data)
    {
        $this->userEmail=$data['email'];
        $this->userPassword=$data['password'];
    }
    public function authenTic()
    {
        $this->email='admin@gmail.com';
        $this->password='admin123';

        if($this->userEmail == $this->email && $this->userPassword== $this->password)
        {
            header('Location: action.php?page=home');
        }
        return "Incorect Information. Try Again";
    }
}