<?php

require_once 'vendor\autoload.php';
use App\classes\Student;
use App\classes\Product;

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

    elseif ($_GET['page']=='products')
    {
        $product = new Product();
        $products = $product->allProducts();
        include 'pages/products.php';
    }
    elseif ($_GET['page']=='Product_details')
    {
        $productId = $_GET['id'];
        $product = new Product();
        $onlySingleProd = $product->singleProducts($productId);
        include 'pages/product_details.php';
    }

    elseif($_GET['page']=='student')
    {
        $student = new Student();
        $students = $student->allStudent();
        include 'pages/student.php';
    }


}