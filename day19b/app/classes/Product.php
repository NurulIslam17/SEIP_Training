<?php

namespace App\classes;

class Product
{
    public $products;
    public $result = [];

    public function getAllProducr()
    {
        return [
                0 => [
                    "name" => "Watch",
                    "id" => "1",
                    "category_id" => "3",
                    "pricr" => "1200tk",
                    "description" => "Both for man and Woman",
                    "image" => "watch.jpg",
                ],
                1 => [
                    "name" => "Benaroshi",
                    "id" => "2",
                    "category_id" => "1",
                    "pricr" => "12343tk",
                    "description" => "for Woman ",
                    "image" => "saree (1).jpg",
                ],
                2 => [
                    "name" => "Pant",
                    "id" => "3",
                    "category_id" => "0",
                    "pricr" => "2000tk",
                    "description" => "For man",
                    "image" => "jeans (1).jpg",
                ],
                3 => [
                    "name" => "Katan Saree",
                    "id" => "4",
                    "category_id" => "1",
                    "pricr" => "10343tk",
                    "description" => "for Woman ",
                    "image" => "saree (2).jpg",
                ],
                4=> [
                    "name" => "Shirt",
                    "id" => "5",
                    "category_id" => "0",
                    "pricr" => "1200tk",
                    "description" => "Both for man and Woman",
                    "image" => "shirt.jpg",
                ],
                5=> [
                    "name" => "Dhakai Jamdani",
                    "id" => "6",
                    "category_id" => "1",
                    "pricr" => "22343tk",
                    "description" => "for Woman ",
                    "image" => "saree (3).jpg",
                ],
                6 => [
                    "name" => "Watch",
                    "id" => "7",
                    "category_id" => "3",
                    "pricr" => "1200tk",
                    "description" => "Both for man and Woman",
                    "image" => "watch (2).jpg",
                ],
                7 => [
                    "name" => "Kids 1",
                    "id" => "8",
                    "category_id" => "2",
                    "pricr" => "1200tk",
                    "description" => "Both for man and Woman",
                    "image" => "kids2.jpg",
                ],
                8 => [
                    "name" => "mobile.jpg",
                    "id" => "9",
                    "category_id" => "3",
                    "pricr" => "1200tk",
                    "description" => "Both for man and Woman",
                    "image" => "mobile.jpg",
                ]
            ];

    }

    public function getProductByCategoryId($categoryId)
    {
        $this->products = $this->getAllProducr();
        foreach ($this->products as $product)
        {
            if($product['category_id'] == $categoryId)
            {
                array_push($this->result,$product);
            }
        }
        return $this->result;
    }
}