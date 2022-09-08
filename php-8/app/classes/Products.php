<?php

namespace App\classes;
use App\classes\Category;
use App\classes\Brand;

class Products
{
    public $products;
    public $categoryObj,$brandObj,$categoryById,$brandById;
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
                'brand_id'          =>2,
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
                'brand_id'          =>2,
                'name'              =>'Galaxy S8+',
                'price'             =>80500,
                'description'       =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur beatae consectetur cumque cupiditate dolor dolorem dolorum et eum facilis ipsa itaque libero necessitatibus possimus quaerat quasi quibusdam quisquam quos repellat, similique ullam veniam, voluptatem voluptatum. Alias autem culpa fugiat, hic illum molestias nihil perferendis praesentium sed sequi?',
                'product_image'     =>'phn12.jpg',
                'company_name'      =>'Samsung'
            ],
            6=>[
                'id'                =>7,
                'category_id'       =>3,
                'brand_id'          =>4,
                'name'              =>'Titans Watch',
                'price'             =>3500,
                'description'       =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur beatae consectetur cumque cupiditate dolor dolorem dolorum et eum facilis ipsa itaque libero necessitatibus possimus quaerat quasi quibusdam quisquam quos repellat, similique ullam veniam, voluptatem voluptatum. Alias autem culpa fugiat, hic illum molestias nihil perferendis praesentium sed sequi?',
                'product_image'     =>'wtc2.jpg',
                'company_name'      =>'Titans'
            ],
            7=>[
                'id'                =>8,
                'category_id'       =>3,
                'brand_id'          =>3,
                'name'              =>'Rolex Mens',
                'price'             =>80500,
                'description'       =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur beatae consectetur cumque cupiditate dolor dolorem dolorum et eum facilis ipsa itaque libero necessitatibus possimus quaerat quasi quibusdam quisquam quos repellat, similique ullam veniam, voluptatem voluptatum. Alias autem culpa fugiat, hic illum molestias nihil perferendis praesentium sed sequi?',
                'product_image'     =>'wtc1.jpg',
                'company_name'      =>'Rolex'
            ],
            8=>[
                'id'                =>9,
                'category_id'       =>2,
                'brand_id'          =>2,
                'name'              =>'Galaxy S8+',
                'price'             =>80500,
                'description'       =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur beatae consectetur cumque cupiditate dolor dolorem dolorum et eum facilis ipsa itaque libero necessitatibus possimus quaerat quasi quibusdam quisquam quos repellat, similique ullam veniam, voluptatem voluptatum. Alias autem culpa fugiat, hic illum molestias nihil perferendis praesentium sed sequi?',
                'product_image'     =>'phn3.jpg',
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
                $this->categoryObj = new Category();
                $this->brandObj = new Brand();
                $this->categoryById=$this->categoryObj->allCategoryInfo($singleOne['category_id']);
                $this->brandById=$this->brandObj->allBrandinfo($singleOne['brand_id']);

                $singleOne['category_id'] = $this->categoryById['name'];
                $singleOne['brand_id'] = $this->brandById['name'];
                return $singleOne;
            }
        }

    }


    public function getCateProducts($cateId)
    {
        $allCategory = $this->products;
        foreach ($allCategory as $items)
        {
            if($items['category_id']==$cateId)
            {
                array_push($this->result,$items);
            }
        }
        return $this->result;
    }

}