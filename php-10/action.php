<?php

require_once 'vendor\autoload.php';
use App\classes\Home;
use App\classes\Student;



if(isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        include 'pages/home.php';
    }

    elseif ($_GET['page']=='manage')
    {
        include 'pages/mamage.php';
    }

}

elseif ($_POST)
{
    if (isset($_POST['addStudent']))
    {
        $student= new Student($_POST);
        $student->newStudent();
    }
}
else{
    $home = new Home();
    $home->index();
}


