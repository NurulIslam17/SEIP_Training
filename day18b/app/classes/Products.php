<?php

namespace App\classes;

class Products
{
    public  $product;

    public function getAlProduct()
    {
        $this->product = [
            0=>[
                "name" => "Shirt",
                "price" => "550tk",
                "Quantity" => "2Pc",
                "image"=>"shirt.jpg",
                "Description" => "SH-13, Alphabet"
            ],
            1=>[
                "name" => "Watch",
                "price" => "3550tk",
                "Quantity" => "10Pc",
                "image"=>"watch (3).jpg",
                "Description" => "WIN-1B33, Winter"
            ],
            2=>[
                "name" => "Katan Sharee",
                "price" => "3450tk",
                "Quantity" => "6Pc",
                "image"=>"saree (3).jpg",
                "Description" => "KTH-173C, Sharee"
            ],
            3=>[
                "name" => "Benaroshi Saree",
                "price" => "1350tk",
                "Quantity" => "2Pc",
                "image"=>"saree (1).jpg",
                "Description" => "SH-13, Alphabet"
            ],
            4=>[
                "name" => "Sweater",
                "price" => "3550tk",
                "Quantity" => "20Pc",
                "image"=>"shirt (2).jpg",
                "Description" => "WIN-1B33, Winter"
            ],
            5=>[
                "name" => "Pant",
                "price" => "950tk",
                "Quantity" => "10Pc",
                "image"=>"jeans (2).jpg",
                "Description" => "Jeans-000D, Odin"
            ]
        ];

        return $this->product;
    }
}
