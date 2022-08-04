<?php

require_once 'vendor/autoload.php';
use App\classes\Student;
use \App\classes\Products;

if(isset($_GET['page']))
{
     if($_GET['page']=='home')
     {
         $allStudent = new Student();
         $students = $allStudent->getAllStudents();
         include 'pages/home.php';
     }
     else if($_GET['page']=='products')
     {
         $allProduct = new Products();
         $product = $allProduct->getAlProduct();
         include 'pages/products.php';
     }
}