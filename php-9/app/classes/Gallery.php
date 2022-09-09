<?php
namespace App\classes;

class Gallery
{
    public $gallery=[];

    public function __construct()
    {
        $this->gallery = [
          0=>[
              'id' => 1,
              'name' =>'Relaxation.png',
              'caption'=>'Relaxation'
          ],
            1=>[
              'id' => 2,
              'name' =>'Woman_.png',
                'caption'=>'Relaxation'
          ],
            2=>[
                'id' => 3,
                'name' =>'traveling.png',
                'caption'=>'Traveling'
            ],
            3=>[
                'id' =>4,
                'name' =>'Experience_design.png',
                'caption'=>'Experience Design'
            ],
            4=>[
                'id' => 5,
                'name' =>'By_my_car.png',
                'caption'=>'By my car'
            ],
            5=>[
                'id' =>6,
                'name' =>'Beach.png',
                'caption'=>'Beach'
            ]

        ];
    }

    public function getAllGallery()
    {
        return $this->gallery;
    }

}