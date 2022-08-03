<?php
//require_once 'App\classes\HomePage.php';
//require_once 'App\classes\Student.php';

//    function trump()
//    {
//        echo "<h1>Hello Trump</h1>";
//    }
//
//    trump();
require_once  'vendor/autoload.php';

use App\classes\HomePage;
use App\classes\Student;

$name = new HomePage();
$lname = new Student();


$name->name().' '.$lname->lastname();
