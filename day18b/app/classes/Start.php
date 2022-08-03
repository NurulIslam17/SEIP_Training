<?php
namespace App\classes;

class Start
{
    public $msg;

    public function __construct()
    {
        $this->msg="It Works";
    }
    public function index()
    {
        echo $this->msg;
    }
}