<?php

namespace App\classes;


class Team
{
    public $team=[];
    public $res=[];

    public function __construct()
    {
        $this->team =[
          0=>[
              'id'=>1,
              'name'=>'Alex Benjamine',
              'position'=>'Project Analyst',
              'description'=>'lorem70Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fugiat voluptatum. Asperiores ipsum labore magni nostrum reiciendis suscipit. Aperiam at debitis deleniti dicta dolore explicabo harum id, incidunt laboriosam molestias mollitia quasi quod ut voluptatem voluptatibus. Accusamus ad adipisci at aut commodi culpa deserunt dolore dolorem doloremque ducimus, excepturi laborum minus mollitia quod ratione rerum saepe sapiente similique tempora tempore voluptas voluptates voluptatum! Aliquam atque cupiditate in molestias neque nihil. ',
              'education'=>'MIT, USA',
              'website'=>'www.alexbenjamine.com',
              'image'=>'ProjectAna.png'
              ],
            1=>[
              'id'=>2,
              'name'=>'Salim Khan',
              'position'=>'Fullstack Engineer',
              'description'=>'lorem70Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fugiat voluptatum. Asperiores ipsum labore magni nostrum reiciendis suscipit. Aperiam at debitis deleniti dicta dolore explicabo harum id, incidunt laboriosam molestias mollitia quasi quod ut voluptatem voluptatibus. Accusamus ad adipisci at aut commodi culpa deserunt dolore dolorem doloremque ducimus, excepturi laborum minus mollitia quod ratione rerum saepe sapiente similique tempora tempore voluptas voluptates voluptatum! Aliquam atque cupiditate in molestias neque nihil. ',
              'education'=>'IIT, Bombay',
              'website'=>'www.salimkhan.com',
               'image'=>'Fullstack.png'
              ],
            2=>[
              'id'=>3,
              'name'=>'Sreyal Gopal',
              'position'=>'Web Developer',
              'description'=>'lorem70Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fugiat voluptatum. Asperiores ipsum labore magni nostrum reiciendis suscipit. Aperiam at debitis deleniti dicta dolore explicabo harum id, incidunt laboriosam molestias mollitia quasi quod ut voluptatem voluptatibus. Accusamus ad adipisci at aut commodi culpa deserunt dolore dolorem doloremque ducimus, excepturi laborum minus mollitia quod ratione rerum saepe sapiente similique tempora tempore voluptas voluptates voluptatum! Aliquam atque cupiditate in molestias neque nihil. ',
              'education'=>'DU, Bangladesh',
              'website'=>'www.sreyalgopal.com',
               'image'=>'Dev.png'
              ],
            3=>[
                'id'=>4,
                'name'=>'Sonali Khattar',
                'position'=>'Web Designer',
                'description'=>'loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fugiat voluptatum. Asperiores ipsum labore magni nostrum reiciendis suscipit. Aperiam at debitis deleniti dicta dolore explicabo harum id, incidunt laboriosam molestias mollitia quasi quod ut voluptatem voluptatibus. Accusamus ad adipisci at aut commodi culpa deserunt dolore dolorem doloremque ducimus, excepturi laborum minus mollitia quod ratione rerum saepe sapiente similique tempora tempore voluptas voluptates voluptatum! Aliquam atque cupiditate in molestias neque nihil. ',
                'education'=>'BUET, Bangladesh',
                'website'=>'www.sonalikhattar.com',
                'image'=>'Designer.png'
            ],

            4=>[
                'id'=>5,
                'name'=>'Ahsan Habib',
                'position'=>'SEO',
                'description'=>'loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fugiat voluptatum. Asperiores ipsum labore magni nostrum reiciendis suscipit. Aperiam at debitis deleniti dicta dolore explicabo harum id, incidunt laboriosam molestias mollitia quasi quod ut voluptatem voluptatibus. Accusamus ad adipisci at aut commodi culpa deserunt dolore dolorem doloremque ducimus, excepturi laborum minus mollitia quod ratione rerum saepe sapiente similique tempora tempore voluptas voluptates voluptatum! Aliquam atque cupiditate in molestias neque nihil. ',
                'education'=>'RUET, Bangladesh',
                'website'=>'www.ahsanhabib.com',
                'image'=>'banner4.png'
            ],
            5=>[
                'id'=>6,
                'name'=>'Abeer Hasan',
                'position'=>'Content Writer',
                'description'=>'loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fugiat voluptatum. Asperiores ipsum labore magni nostrum reiciendis suscipit. Aperiam at debitis deleniti dicta dolore explicabo harum id, incidunt laboriosam molestias mollitia quasi quod ut voluptatem voluptatibus. Accusamus ad adipisci at aut commodi culpa deserunt dolore dolorem doloremque ducimus, excepturi laborum minus mollitia quod ratione rerum saepe sapiente similique tempora tempore voluptas voluptates voluptatum! Aliquam atque cupiditate in molestias neque nihil. ',
                'education'=>'DU, Bangladesh',
                'website'=>'www.abeerhasan.com',
                'image'=>'content.png'
            ]
        ];
    }

    public function allTeamMember()
    {
        return $this->team;
    }

    public function getSingleMenber($singleMember)
    {
        $allMember = $this->team;
        foreach ($allMember as $employee)
        {
            if($employee['id'] == $singleMember)
            {
                array_push($this->res,$employee);
            }
        }
        return $this->res;
    }

}