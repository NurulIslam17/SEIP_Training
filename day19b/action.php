<?php
require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Product;

$categoryMenu = new Category();
$categoryName = $categoryMenu->getAllCategory();
if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $getProduct = new Product();
        $getAll = $getProduct->getAllProducr();
        include 'pages/home.php';
    }
    else if($_GET['page'] == 'category')
    {
        $categoryId = $_GET['id'];
        $product = new Product();
        $products = $product->getProductByCategoryId($categoryId);
        include "pages/category.php";
    }
}