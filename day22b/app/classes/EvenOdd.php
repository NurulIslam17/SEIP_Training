<?php
namespace App\classes;

class EvenOdd
{
    public $num,$res;

    public function __construct($data)
    {
//        print_r($data);
//        exit();
        $this->num =  $data['number'];
    }

    public function getResult()
    {
        if($this->num %2 == 0)
        {
            return $this->res = "Even Number";
        }
        else{
            return $this->res = "Odd Number";
        }
    }
}