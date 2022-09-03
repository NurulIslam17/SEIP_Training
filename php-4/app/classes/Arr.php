<?php

namespace App\classes;


class Arr
{
    public $arr;
    public $students;
    public function __construct()
    {
        $this->arr = array('11',2,3);
        $this->students=[
            [
                'name'=>"Nurul Islam",
                'email'=>"nurul@gmail.com",
                'phone'=>[
                    'm1'=>'3435454',
                    'm2'=>'3435454',
                    'm3'=>'3435454'
                ],
                'city'=>"Dhaka"
            ],

            [
                'name'=>"Nurul Islam",
                'email'=>"nurul@gmail.com",
                'phone'=>"123345",
                'city'=>"Dhaka"
            ],

            ['name'=>"Nurul Islam",
            'email'=>"nurul@gmail.com",
            'phone'=>"123345",
            'city'=>"Dhaka"
            ]
        ];
    }
    public function arrPrint()
    {
//        echo "<pre>";
////        print_r($this->arr);
//
//        echo '<br><br>';
//        var_dump($this->students);

        foreach ($this->students as $value)
        {
            foreach ($value as $x)
            {
                if(is_array($x))
                {
                    foreach ($x as $x_val)
                    {
                        echo $x_val.' <br> ';
                    }
                }
                else{
                    echo $x.'<br>';
                }
            }
            echo '<br><br>';
        }
    }
}