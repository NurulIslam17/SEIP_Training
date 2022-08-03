<?php

require_once 'vendor/autoload.php';
use App\classes\Student;

if(isset($_GET['page']))
{
 if($_GET['page']=='home')
 {
     $allStudent = new Student();
     $students = $allStudent->getAllStudents();
    include 'pages/home.php';
 }
}