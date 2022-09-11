<?php

namespace App\classes;
use App\classes\Database;

class Student
{
    public $student_name;
    public $student_id;
    public $student_email;
    public $student_department;
    public $student_address;
    public $database,$sql;
    public function __construct($data)
    {

        $this->student_name = $data['student_name'];
        $this->student_id = $data['student_id'];
        $this->student_email = $data['student_email'];
        $this->student_department = $data['student_department'];
        $this->student_address = $data['student_address'];

    }
    public function addStudent()
    {
        $this->sql=" INSERT INTO students( student_name, student_id, student_email, student_department, student_address)
  VALUES ('$this->student_name','$this->student_id','$this->student_email','$this->student_department','$this->student_address') ";

        $this->database = new Database();
        mysqli_query($this->database->dbConnect(),$this->sql);
        echo 'Data Inserted Successfully';
    }


}