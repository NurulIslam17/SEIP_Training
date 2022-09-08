<?php
namespace App\classes;

class Calculator
{
    public  $num1, $num2,$res,$opp;
//    public function __construct($data)
//    {
//        $this->num1 = $data['n1'];
//        $this->num2 = $data['n2'];
//        $this->opp = $data['operation'];
//
//        echo '<pre>';
//        print_r($_POST);
//        exit();

//    }
    public  function getResult($data)
    {
//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->num1 = $data['n1'];
        $this->num2 = $data['n2'];
        $this->opp = $data['operation'];


        switch ($this->opp)
        {
            case "add":
                 $this->res = $this->num1 +$this->num2;
                 break;

            case 'sub':
                 $this->res = $this->num1 -$this->num2;
                 break;

            case 'mult':
                $this->res = $this->num1 * $this->num2;
                break;

            case 'div':
                if( $this->num2==0)
                {
                    $this->res = 'Cannot divide by zero';
                }
                else{
                    $this->res = $this->num1 / $this->num2;
                }
                break;
            case 'mod':
                if( $this->num2==0)
                {
                    $this->res = 'Division by 0 is undefined.';
                }
                else{
                    $this->res = $this->num1 % $this->num2;
                }
                break;
        }
        return $this->res;
    }
}