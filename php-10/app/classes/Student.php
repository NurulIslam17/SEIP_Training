<?php


namespace App\classes;
use App\classes\Database;


class Student
{
    public $student_name;
    public $student_seid;
    public $email;
    public $phone;
    public $database,$sql;

    public function __construct($data)
    {
//        echo '<pre>';
//        print_r($_POST);
//        exit();

        $this->student_name = $data['student_name'];
        $this->student_seid = $data['student_seid'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];

    }

    public  function newStudent()
    {
        $this->sql =  " INSERT INTO students(student_name, student_seid, email, phone) VALUES ('$this->student_name','$this->student_seid','$this->email','$this->phone') ";
        $this->database = new Database();
        mysqli_query($this->database->dbConnect(),$this->sql);
        echo 'Data Inserted Successfully';

    }

}