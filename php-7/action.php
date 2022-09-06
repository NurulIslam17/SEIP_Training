<?php

require_once 'vendor\autoload.php';
use App\classes\Brand;
use App\classes\Category;
use App\classes\Products;

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

}
