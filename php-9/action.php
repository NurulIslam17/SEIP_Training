<?php

require_once 'vendor\autoload.php';
use App\classes\Brand;
use App\classes\Category;
use App\classes\Products;
use App\classes\Home;
use App\classes\Calculator;

$productObj = new Products();

$categoryObj = new Category();
$allCategory = $categoryObj->allCategory();


if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        $allProducts = $productObj->allProduct();
        include 'pages/home.php';
    }

    elseif ($_GET['page']=='category')
    {
        $cateId = $_GET['cate_is'];
        $cateIdProducts = $productObj->getCateProducts($cateId);
        include 'pages/category_products.php';
    }

      elseif ($_GET['page']=='product_details')
    {
        $prodId = $_GET['id'];
        $singleProd = $productObj->singleProdInfo($prodId);
        include 'pages/product_details.php';
    }

    elseif ($_GET['page']=='contact')
    {
        include 'pages/contact.php';
    }
    elseif ($_GET['page']=='calculator')
    {
        include 'pages/calculator.php';
    }
}

elseif (isset($_POST['btnFullName']))
{
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $fullName = $firstName. ' '. $lastName;
    include 'pages/contact.php';
}

elseif (isset($_POST['btnRes']))
{

    $data = new Calculator($_POST);
    $res = $data->getResult();
    include 'pages/calculator.php';

}
else{
    $home = new Home();
    $home->index();
}
