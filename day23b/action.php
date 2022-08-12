<?php

require_once "vendor/autoload.php";
Use App\classes\Home;
use App\classes\Student;

    if(isset($_GET['page']))
    {
        if($_GET['page'] == 'home')
        {
            include 'pages/home.php';
        }
        else if ($_GET['page'] == 'create')
        {
            include 'pages/create-student.php';
        }
        else if ($_GET['page'] = 'manage')
        {
            include 'pages/manage.php';
        }
    }
    else if (isset($_POST['saveInfo']))
    {
        $student = new  Student($_POST,$_FILES);
        $info = $student->saveStudentInfo();
        include 'pages/create-student.php';
    }