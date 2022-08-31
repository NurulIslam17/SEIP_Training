<?php
namespace App\classes;

class Operator
{
    public $num1;
    public $num2;
    public $res;

    public function add($n1,$n2)
    {
        $this->num1=$n1;
        $this->num2=$n2;
        $this->res=$this->num1+$this->num2;
        echo 'Addition of '.$this->num1. ' and '.$this->num2.' is = '.$this->res.'<br><br>';
    }
    public function sub($n1,$n2)
    {
        $this->num1=$n1;
        $this->num2=$n2;
        $this->res=$this->num1 - $this->num2;
        echo 'Subtraction of '.$this->num1. ' and '.$this->num2.' is = '.$this->res.'<br><br>';
    }

    public function mult($n1,$n2)
    {
        $this->num1=$n1;
        $this->num2=$n2;
        $this->res=$this->num1 * $this->num2;
        echo 'Multiplication of '.$this->num1. ' and '.$this->num2.' is = '.$this->res.'<br><br>';
    }

    public function div($n1,$n2)
    {
        $this->num1=$n1;
        $this->num2=$n2;
        if($this->num1==0)
        {

            echo 'Division of '.$this->num1. ' /'.$this->num2.' is = MATH ERROR. <br><br>';
        }
        else {
            $this->res=$this->num1 / $this->num2;
            echo 'Division of '.$this->num1. ' / '.$this->num2.' is = '.$this->res.'<br><br>';
        }
    }

    public function pow($n1,$n2)
    {
        $this->num1=$n1;
        $this->num2=$n2;
        $this->res=$this->num1 ** $this->num2;
        echo $this->num1. ' Power '.$this->num2.' is = '.$this->res.'<br><br>';
    }

}