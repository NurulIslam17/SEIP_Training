<?php


namespace App\classes;


class Calculator
{
    public  $num1, $num2,$res,$opp;
    public function __construct($data)
    {
        $this->num1 = $data['n1'];
        $this->num2 = $data['n2'];
        $this->opp = $data['operation'];

//        echo '<pre>';
//        print_r($_POST);
//        exit();

    }
    public  function getResult()
    {
        switch ($this->opp)
        {
            case '+':
                 $this->res = $this->num1 +$this->num2;
                 break;
            case '-':
                 $this->res = $this->num1 -$this->num2;
                 break;
            case '*':
                $this->res = $this->num1 * $this->num2;
                break;

            case '/':
                $this->res = $this->num1 / $this->num2;
                break;
        }
        return $this->res;
    }
}