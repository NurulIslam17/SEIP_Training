<?php
namespace App\classes;

class Database
{
    public $user,$hostName,$database,$password,$con;

    public function __construct()
    {
        $this->user = 'root';
        $this->hostName = 'localhost';
        $this->database = 'class_11';
        $this->password ='';
    }

    public function dbConnect()
    {
        $this->con = mysqli_connect( $this->hostName, $this->user, $this->password, $this->database);
        return $this->con;
    }

}