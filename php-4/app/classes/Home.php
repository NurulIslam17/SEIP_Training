<?php


namespace App\classes;


class Home
{
    public $n1;
    public $n2;
    public $n3;
    public $sum;

    public function __construct()
    {
        $this->n1 = 10;
        $this->n2 = 10;
        $this->n3 = 10;
        echo "Its Running .... From Home Class <br><br>";

    }
    public  function add()
    {
        $this->sum = $this->n1 + $this->n2 + $this->n3;
        echo $this->sum.'<br><br>';
    }

    public function sub($num1, $num2)
    {
        $this->n1=$num1;
        $this->n2=$num2;
        echo 'Subtraction is  : '.$this->n1 - $this->n2.'<br><br>';
    }
}