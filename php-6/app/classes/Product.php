<?php


namespace App\classes;


class Product
{
    public $products=[];
    public $allProd;
    public $res=[];

    public function __construct()
    {
        $this->products=[
            0=>[
                'id'=>1,
                'product_name'=>'Shirt',
                'Product_Price'=>2500,
                'Product_description'=>'100% Coton lorem50Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque blanditiis consequuntur corporis delectus eligendi iusto modi molestiae nihil non obcaecati, odio optio possimus quasi quis, sapiente suscipit, totam unde.',
                'product_company'=>'Raymond',
                'product_img'=>'assets/products/srt1.jpg',
            ],
            1=>[
                'id'=>2,
                'product_name'=>'Laptop',
                'Product_Price'=>54500,
                'Product_description'=>'Best Laptop.. lorem50 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque blanditiis consequuntur corporis delectus eligendi iusto modi molestiae nihil non obcaecati, odio optio possimus quasi quis, sapiente suscipit, totam unde.',
                'product_company'=>'HP',
                'product_img'=>'assets/products/lap1.jpg',
            ] ,
            2=>[
                'id'=>3,
                'product_name'=>'Phone',
                'Product_Price'=>34500,
                'Product_description'=>'Best Moder for this generation.. lorem50  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque blanditiis consequuntur corporis delectus eligendi iusto modi molestiae nihil non obcaecati, odio optio possimus quasi quis, sapiente suscipit, totam unde.',
                'product_company'=>'Apple',
                'product_img'=>'assets/products/phn1.jpg',
            ],
            3=>[
                'id'=>4,
                'product_name'=>'Watch',
                'Product_Price'=>10500,
                'Product_description'=>'Generations choice.. lorem50  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque blanditiis consequuntur corporis delectus eligendi iusto modi molestiae nihil non obcaecati, odio optio possimus quasi quis, sapiente suscipit, totam unde.',
                'product_company'=>'Rolex',
                'product_img'=>'assets/products/wtc1.jpg',
            ],
            4=>[
                'id'=>5,
                'product_name'=>'Shirt',
                'Product_Price'=>5500,
                'Product_description'=>'100% Coton lorem50Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque blanditiis consequuntur corporis delectus eligendi iusto modi molestiae nihil non obcaecati, odio optio possimus quasi quis, sapiente suscipit, totam unde.',
                'product_company'=>'Raymond',
                'product_img'=>'assets/products/srt3.jpg',
            ],
            5=>[
                'id'=>6,
                'product_name'=>'Laptop',
                'Product_Price'=>57500,
                'Product_description'=>'Best Laptop.. lorem50 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque blanditiis consequuntur corporis delectus eligendi iusto modi molestiae nihil non obcaecati, odio optio possimus quasi quis, sapiente suscipit, totam unde.',
                'product_company'=>'Apple',
                'product_img'=>'assets/products/lap2.jpg',
            ] ,

        ];
    }

    public function allProducts()
    {
        return $this->products;
    }

    public function singleProducts($singleId)
    {
        $this->allProd = $this->allProducts();

        foreach ($this->allProd as $prod)
        {
            if($prod['id'] == $singleId)
            {
                array_push($this->res,$prod);
            }
        }
        return $this->res;
    }

}