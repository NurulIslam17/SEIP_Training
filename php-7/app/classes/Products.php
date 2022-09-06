<?php

namespace App\classes;

class Products
{
    public $products;
    public $result=[];

    public function __construct()
    {
        $this->products =[
            0=>[
                'id'                =>1,
                'category_id'       =>1,
                'brand_id'          =>1,
                'name'              =>'Samsung',
                'price'             =>50500,
                'description'       =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur beatae consectetur cumque cupiditate dolor dolorem dolorum et eum facilis ipsa itaque libero necessitatibus possimus quaerat quasi quibusdam quisquam quos repellat, similique ullam veniam, voluptatem voluptatum. Alias autem culpa fugiat, hic illum molestias nihil perferendis praesentium sed sequi?',
                'product_image'     =>'lap1.jpg',
                'company_name'      =>'Samsung'
            ],
            1=>[
                'id'                =>2,
                'category_id'       =>1,
                'brand_id'          =>1,
                'name'              =>'Mac Pro',
                'price'             =>80500,
                'description'       =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur beatae consectetur cumque cupiditate dolor dolorem dolorum et eum facilis ipsa itaque libero necessitatibus possimus quaerat quasi quibusdam quisquam quos repellat, similique ullam veniam, voluptatem voluptatum. Alias autem culpa fugiat, hic illum molestias nihil perferendis praesentium sed sequi?',
                'product_image'     =>'lap2.jpg',
                'company_name'      =>'Apple'
            ],
            2=>[
                'id'                =>3,
                'category_id'       =>2,
                'brand_id'          =>1,
                'name'              =>'iphone Pro Max',
                'price'             =>44500,
                'description'       =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur beatae consectetur cumque cupiditate dolor dolorem dolorum et eum facilis ipsa itaque libero necessitatibus possimus quaerat quasi quibusdam quisquam quos repellat, similique ullam veniam, voluptatem voluptatum. Alias autem culpa fugiat, hic illum molestias nihil perferendis praesentium sed sequi?',
                'product_image'     =>'phn1.jpg',
                'company_name'      =>'Apple'
            ],
            3=>[
                'id'                =>4,
                'category_id'       =>2,
                'brand_id'          =>1,
                'name'              =>'Galaxy S8',
                'price'             =>80500,
                'description'       =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur beatae consectetur cumque cupiditate dolor dolorem dolorum et eum facilis ipsa itaque libero necessitatibus possimus quaerat quasi quibusdam quisquam quos repellat, similique ullam veniam, voluptatem voluptatum. Alias autem culpa fugiat, hic illum molestias nihil perferendis praesentium sed sequi?',
                'product_image'     =>'phn11.jpg',
                'company_name'      =>'Samsung'
            ],
            4=>[
                'id'                =>5,
                'category_id'       =>1,
                'brand_id'          =>1,
                'name'              =>'HP Pro Book',
                'price'             =>50500,
                'description'       =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur beatae consectetur cumque cupiditate dolor dolorem dolorum et eum facilis ipsa itaque libero necessitatibus possimus quaerat quasi quibusdam quisquam quos repellat, similique ullam veniam, voluptatem voluptatum. Alias autem culpa fugiat, hic illum molestias nihil perferendis praesentium sed sequi?',
                'product_image'     =>'lap4.jpg',
                'company_name'      =>'Apple'
            ],
            5=>[
                'id'                =>6,
                'category_id'       =>2,
                'brand_id'          =>1,
                'name'              =>'Galaxy S8+',
                'price'             =>80500,
                'description'       =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur beatae consectetur cumque cupiditate dolor dolorem dolorum et eum facilis ipsa itaque libero necessitatibus possimus quaerat quasi quibusdam quisquam quos repellat, similique ullam veniam, voluptatem voluptatum. Alias autem culpa fugiat, hic illum molestias nihil perferendis praesentium sed sequi?',
                'product_image'     =>'phn12.jpg',
                'company_name'      =>'Samsung'
            ],
        ];

    }
    public function allProduct()
    {
        return $this->products;
    }
    public  function  singleProdInfo($prodId)
    {
        $allProd = $this->products;
        foreach ($allProd as $singleOne)
        {
            if($singleOne['id']==$prodId)
            {
                array_push($this->result,$singleOne);
            }
        }
        return $this->result;
    }

}