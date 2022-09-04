<?php

namespace App\classes;


class Student
{
    public $student=[];

    public function __construct()
    {
        $this->student=[

            0=>[
                'id'=>1,
                'name'=>'Nurul',
                'email'=>'nurul@gmail.com',
                'phone'=>'017378585985',
            ],
            1=>[
                'id'=>2,
                'name'=>'Abir',
                'email'=>'abirl@gmail.com',
                'phone'=>'017567585985',
            ],
            2=>[
                'id'=>3,
                'name'=>'Alice',
                'email'=>'alice@gmail.com',
                'phone'=>'017356485985',
            ],
            3=>[
                'id'=>4,
                'name'=>'ob',
                'email'=>'bob@gmail.com',
                'phone'=>'013456485985',
            ] ,
            4=>[
                'id'=>5,
                'name'=>'Bob',
                'email'=>'bb@gmail.com',
                'phone'=>'013456485985',
            ],
            5=>[
                'id'=>6,
                'name'=>'Serya',
                'email'=>'sreya@gmail.com',
                'phone'=>'013456485985',
            ],
            6=>[
                'id'=>7,
                'name'=>'Amor',
                'email'=>'amor@gmail.com',
                'phone'=>'013456485985',
            ]

        ];
    }

    public function allStudent()
    {
        return $this->student;
    }

}