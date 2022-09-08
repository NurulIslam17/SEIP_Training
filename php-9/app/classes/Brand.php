<?php

namespace App\classes;


class Brand
{
    public  function allBrand()
    {
        return [
                    [
                        'id'     => 1,
                        'name'   =>'Apple'
                    ],
                    [
                        'id'     => 2,
                        'name'   =>'Samsung'
                    ],
                    [
                        'id'     => 3,
                        'name'   =>'Rolex'
                    ],
                    [
                        'id'     => 4,
                        'name'   =>'Titans'
                    ],
            ];
    }

    public function allBrandinfo($brand_id)
    {
        $allBrand = $this->allBrand();

        foreach ($allBrand as $brandInfo)
        {
            if($brandInfo['id']==$brand_id)
            {
                return $brandInfo;
            }
        }
    }
}