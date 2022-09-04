<?php

require_once 'vendor\autoload.php';
use App\classes\Student;

if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        include 'pages/home.php';
    }
    elseif($_GET['page']=='about')
    {
        include 'pages/about.php';
    }
    elseif($_GET['page']=='student')
    {
        $student = new Student();
        $students = $student->allStudent();
        include 'pages/student.php';
    }
}