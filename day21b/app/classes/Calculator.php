<?php

namespace App\classes;

class Calculator
{
    public  $n1,$n2,$opp;
     public function __construct($data)
     {
         $this->n1 = $data['n1'];
         $this->n2 = $data['n2'];
         $this->opp = $data['operations'];

//         echo "<pre>";
//         print_r($data);
//         exit();

     }
     public function getNumber()
     {
         if($this->opp == '+')
         {
             return $this->n1 + $this->n2;
         }
         else if($this->opp=="-")
         {
             return $this->n1 - $this->n2;
         }
         else if($this->opp == '*')
         {
             return  $this->n1 * $this->n2;
         }
         else if($this->opp == '/')
         {
             if($this->n1 == 0)
             {
                 return 'Math ERROR';
             }
             else{
                 return  $this->n1 / $this->n2;
             }
         }
         else if($this->opp == '%')
         {
             return $this->n1 % $this->n2;
         }

     }
}