<?php

namespace App\classes;

class Product
{
    public $products;
    public $result = [];


    public  function getAllProducts()
     {
         return [
             0=>[
                 'id' => 1,
                 'category_id' => 1,
                 'name' => 'Shirt',
                 'price'=> 1200,
                 'image' => 'shirt-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ],
             1=>[
                 'id' => 2,
                 'category_id' => 2,
                 'name' => 'Katan Saree',
                 'price'=> 2200,
                 'image' => 'saree (3)-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ],
             2=>[
                 'id' => 3,
                 'category_id' => 2,
                 'name' => 'Jamdani Saree',
                 'price'=> 2300,
                 'image' => 'saree (1)-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ],
             3=>[
                 'id' => 4,
                 'category_id' => 1,
                 'name' => 'Jeans',
                 'price'=> 1999,
                 'image' => 'jeans (1)-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ],
             4=>[
                 'id' => 5,
                 'category_id' => 1,
                 'name' => 'Watch',
                 'price'=> 1200,
                 'image' => 'watch-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ],
             5=>[
                 'id' => 6,
                 'category_id' => 2,
                 'name' => 'Benaroshi Saree',
                 'price'=> 1200,
                 'image' => 'saree (2)-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ],
             6=>[
                 'id' => 7,
                 'category_id' => 1,
                 'name' => 'Watch',
                 'price'=> 2200,
                 'image' => 'watch (2)-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ],
             7=>[
                 'id' => 8,
                 'category_id' => 3,
                 'name' => 'Water Pot',
                 'price'=> 200,
                 'image' => 'kids2-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ],
             8=>[
                 'id' => 9,
                 'category_id' => 3,
                 'name' => 'Water pot2',
                 'price'=> 200,
                 'image' => 'kids-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ],
                9=>[
                 'id' => 10,
                 'category_id' => 4,
                 'name' => 'Londry',
                 'price'=> 5200,
                 'image' => 'londry-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ],
             10=>[
                 'id' => 11,
                 'category_id' => 4,
                 'name' => 'Mobile',
                 'price'=> 32200,
                 'image' => 'mobile-min.jpg',
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque debitis deleniti earum, enim et eum fugiat '
             ]
         ];
     }

    public function getProductByCategory($categoryId)
    {
        $this->products = $this->getAllProducts();

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