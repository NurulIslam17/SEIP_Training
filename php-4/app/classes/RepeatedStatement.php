<?php

namespace App\classes;

class RepeatedStatement
{
    public $num1,$i;
    public $arr;

    public function __construct()
    {
        $this->i=1;
        $this->arr=array('11',3,4);
    }

    public function forLoop($data)
    {
        $this->num1 = $data;
        echo 'Multiplication Table for  '.$this->num1.' : <br><br>';
        for ($this->i; $this->i<=10; $this->i++)
            {
                echo $this->num1 . '  X  '.$this->i .'  =   '.$this->num1*$this->i.' <br>';
            }
    }


    public function whileLoop($data)
    {
        echo '<br><br>While Loop : <br><br>';
        $this->num1 = $data;

        $this->i=1;
        while ($this->i<=$this->num1)
        {
            echo "While Loop ".' '.$this->i.'<br>';
            $this->i++;
        }
    }

    public  function forEachfn()
    {

        echo '<br><br>For Each Loop : <br><br>';
        foreach($this->arr as $key=> $item)
        {
            echo'['.$key.'] : '. $item.' <br>';
        }
    }


}