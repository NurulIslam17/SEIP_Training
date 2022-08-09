<?php

namespace App\classes;

class Fullname
{
    public $firstName, $lastName;
   public function __construct($data)
   {
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];
   }
   public  function getFullName()
   {
     return $this->firstName.' '.$this->lastName;
   }
}