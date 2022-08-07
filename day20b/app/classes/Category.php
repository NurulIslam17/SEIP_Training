<?php

namespace App\classes;

class Category
{
    public function getLlCategory()
    {
        return [
            0=>[
                'id'=> 1,
                'name' => 'Man Fashion'
            ],
            1=>[
                'id'=> 2,
                'name' => 'Woman Fashion'
            ],
            2=>[
                'id'=> 3,
                'name' => 'Kids Fashion'
            ],
            3=>[
                'id'=> 4,
                'name' => 'Electronics'
            ]
        ];
    }

}