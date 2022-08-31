<?php
namespace App\classes;

class Home
{
    public $name;
    public $Area;
    public $pumpName;

    public function waterpump($name,$area,$pump)
    {
        $this->name=$name;
        $this->Area=$area;
        $this->pumpName=$pump;

        echo 'House '.$this->name.' '.$this->Area.' use '.$this->pumpName.'Pump <br><br>';
    }

}