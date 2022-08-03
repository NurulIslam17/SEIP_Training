<?php

namespace App\classes;

class Fullname
{
    public  $fullname;

     public function __construct()
     {
         $this->fullname = "Donald Trump";
     }

     public function fnFunc()
     {
         echo $this->fullname;
     }

     public function arrayFunc()
     {
         $this->students = [
             0=>[
                 'name' => 'Nurul Islam',
                 'email' => 'nurul@gmail.com',
                 'Phone' => '12345656456'
             ],
             1=>[
                 'name' => 'Nurul',
                 'email' => 'nurul@gmail.com',
                 'Phone' => '12347856456'
             ],
             2=>[
                 'name' => 'Islam',
                 'email' => 'nurvcxzccvul@gmail.com',
                 'Phone' => '12345656456'
             ]     ,
         3=>[
                 'name' => 'kevin',
                 'email' => 'kevin@gmail.com',
                 'Phone' => '12345656456'
             ]
         ];

         foreach ($this->students[3] as $val)
         {
             echo $val."<br/>";
         }
     }
}