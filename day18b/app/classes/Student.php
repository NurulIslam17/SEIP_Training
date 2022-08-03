<?php

namespace App\classes;

class Student
{
    public $student;
    public $htmlContent;

    public function __construct()
    {
        $this->student = [
            0=>[
                "name" => "Nurul",
                "email" => "nurulcse09@gmail.com",
                "Mejor" => "SWE",
                "city" =>"Dhaka"
            ],
            1=>[
                "name" => "Nirob",
                "email" => "nirob@gmail.com",
                "Mejor" => "HR",
                "city" =>"Comilla"
            ],
            2=>[
                "name" => "Nitu",
                "email" => "nitu@gmail.com",
                "Mejor" => "Business Analyst",
                "city" =>"Rangpur"
            ],
            3=>[
                "name" => "Alice",
                "email" => "Alice@gmail.com",
                "Mejor" => "Business Analyst",
                "city" =>"NYC"
            ],
        ];
    }

    public function getAllStudents()
    {
        return $this->student;
    }

    public function appendHtml()
    {
//        echo '<pre>';
//        print_r($this->student);

        $this->htmlContent = '<html>';
        $this->htmlContent .= '<head>';
        $this->htmlContent .= '</head>';
        $this->htmlContent .= '<body>';

        $this->htmlContent .= '<table border="1">';
            $this->htmlContent .= '<tr bgcolor="#faebd7">';

                $this->htmlContent .= '<th>Name</th>';
                $this->htmlContent .= '<th>Email</th>';
                $this->htmlContent .= '<th>Mejor</th>';
                $this->htmlContent .= '<th>City</th>';

            $this->htmlContent .= '</tr>';

            foreach ($this->student as $info)
            {
                $this->htmlContent .= '</tr>';
                    $this->htmlContent .= '<td>'.$info['name'].'</td>';
                    $this->htmlContent .= '<td>'.$info['email'].'</td>';
                    $this->htmlContent .= '<td>'.$info['Mejor'].'</td>';
                    $this->htmlContent .= '<td>'.$info['city'].'</td>';
                $this->htmlContent .= '</tr>';
            }
        $this->htmlContent .= '</table>';
        $this->htmlContent .= '</body>';
        $this->htmlContent .= '</html>';

        echo $this->htmlContent;

    }

}