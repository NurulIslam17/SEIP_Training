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

    public function greaterNumber3($num1,$num2,$num3)
    {
        $this->n1=$num1;
        $this->n2=$num2;
        $this->n3=$num3;

        if($this->n1 > $this->n2 && $this->n1 > $this->n3 )
        {
            echo $this->n1.' is Largest between '. $this->n1.' ,'.$this->n2.' ,'.$this->n3.'. <br><br>';
        }
        elseif ($this->n2 > $this->n1 && $this->n2 > $this->n3)
        {
            echo $this->n2.' is Largest between '. $this->n1.' ,'.$this->n2.' ,'.$this->n3.'. <br><br>';
        }
        else{
            echo $this->n3.' is Largest between '. $this->n1.' ,'.$this->n2.','.$this->n3.'. <br><br>';
        }
    }


}
