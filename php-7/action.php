<?php

require_once 'vendor\autoload.php';
use App\classes\Brand;
use App\classes\Category;
use App\classes\Products;

$productObj = new Products();

if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        $allProducts = $productObj->allProduct();
        include 'pages/home.php';
    }
    elseif ($_GET['page']=='product_details')
    {
        $prodId = $_GET['id'];
        $singleProd = $productObj->singleProdInfo($prodId);
        include 'pages/product_details.php';
    }

}
