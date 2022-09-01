<?php
namespace App\classes;

class Home
{
    public $n1;
    public $n2;
    public $msg;

    public function __construct()
    {
        $this->msg = " Its Working";

    }

    public function index()
    {
        echo $this->msg.'<br><br>';
    }

    public function evenOdd($num)
    {
        $this->n1 = $num;

        if($this->n1%2==0)
        {
            echo $this->n1.' is Even Number<br><br>';
        }
        else{
            echo $this->n1.' is Odd Number<br><br>';
        }
    }

     
}
