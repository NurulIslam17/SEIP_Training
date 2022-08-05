<?php

namespace App\classes;

class Category
{
    public function getAllCategory()
    {
        return [
          0=>[
              "id" => 0,
              "Name" => "Man Fashion"
          ],
            1=>[
              "id" => 1,
              "Name" => "Woman Fashion"
          ],
            2=>[
              "id" => 2,
              "Name" => "Kid Fashion"
          ],
            3=>[
              "id" => 3,
              "Name" => "Electronics"
          ],
            4=>[
                "id" => 4,
                "Name" => "Winter Collection"
            ],
        ];
    }
}