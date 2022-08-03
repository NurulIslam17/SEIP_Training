<?php
namespace App\classes;

class Fullname
{
    public $message;
    public $firstName;
    public $lastName;

    public $x=10;
    public  $y=20;



    public function __construct()//      auto call
    {
       $this->message = "Hello World";
       $this->firstName="Donald";
       $this->lastName="Trump";
    }
    public function fullname()
    {
       echo $this->message;
       echo $this->firstName." &nbsp".$this->lastName;
       echo gettype($this->x);
    }

    public function operator()
    {
//        echo "<br>";
//        echo $this->x + $this->y;
//        echo "<br/>";
//
//        echo $this->x - $this->y;
//        echo "<br/>";
//
//        echo $this->x * $this->y;
//        echo "<br/>";
//
//        echo $this->x / $this->y;
//        echo "<br/>";
//
//        echo $this->x % $this->y;
//        echo "<br/>";
//
//        echo "Increment Oper: <br/>";
//        echo  $this->x++;


         echo "Conditional Operatior <br/>";
//         echo $this->x < $this->y;
//         echo "<br/>";
//
//         $this->x=10;
//         $this->y='10';
//
//        echo $this->x !== $this->y;
//        echo "<br/>";

        $this->x=true;
        $this->y=false;

        echo !$this->x;
        echo "<br/>";


    }


}