<?php

namespace App\classes;


class Database
{
    public $user;
    public $hostName;
    public $password;
    public $databaseName;
    public $connected;

    public function __construct()
    {
        $this->user='root';
        $this->hostName='localhost';
        $this->password ='';
        $this->databaseName='batch_9';
    }

    public  function dbConnect()
    {
       $this->connected = mysqli_connect($this->hostName,$this->user,$this->password,$this->databaseName);
       return $this->connected;
    }

}