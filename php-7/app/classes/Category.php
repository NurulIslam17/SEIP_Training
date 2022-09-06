<?php

namespace App\classes;


class Category
{
    public $categories = [];
    public $result = [];

    public function __construct()
    {
        $this->categories= [
            0=>[
                'id'    => 1,
                'name'  =>'Laptop'
            ],
            1=>[
                'id'    => 2,
                'name'  =>'Mobile'
            ],
            2=>[
                'id'    => 3,
                'name'  =>'Watch'
            ]
        ];
    }


    public function allCategory()
    {
        return $this->categories;
    }

}