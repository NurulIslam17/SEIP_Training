<?php

    require_once 'vendor/autoload.php';
    use App\classes\Home;
    use App\classes\Category;
    use App\classes\Product;

    $categorie = new Category();
    $categories = $categorie->getLlCategory();

    if(isset($_GET['page']))
    {
        if($_GET['page']=='home')
        {
            $product = new Product();
            $products = $product->getAllProducts();
            include 'pages/home.php';
        }

        else if($_GET['page']=='about')
        {
            include 'pages/about.php';
        }

        else if($_GET['page'] =='category')
        {
            $categoryId = $_GET['categori_id'];
            $product = new Product();
            $categoryProducts = $product->getProductByCategory($categoryId);
            include 'pages/categoryProducts.php';
        }

    }