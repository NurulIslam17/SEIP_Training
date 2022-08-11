<?php


namespace App\classes;


class Prime
{
    public $num,$res,$flag=1,$i;

     public function __construct($data)
     {
         $this->num = $data['number'];
     }
     public function getPrime()
     {
       if($this->num ==0 || $this->num== 1)
       {
           $this->flag= 0;
       }
       for($i=2; $i<($this->num)/2; $i++)
       {
           if(($this->num % $i)==0)
           {
               $this->flag=0;
               break;
           }
       }
       if($this->flag==0)
       {
           return $this->res = "Not a Prime Number";
       }
       else{
           return $this->res = "Prime Number";
       }

     }
}