<?php

require_once 'vendor/autoload.php';
use  App\classes\Home;
use App\classes\Series;
use App\classes\Prime;
use App\classes\EvenOdd;

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    else if($_GET['page']=='series')
    {
        include "pages/series.php";
    }
    else if($_GET['page']=='oddEven')
    {
        include 'pages/evenOdd.php';
    }
    else if($_GET['page']=='prime')
    {
        include 'pages/prime.php';
    }
}
else if(isset($_POST['resultSeries']))
{
    $series = new Series($_POST);
    $serieRes = $series->getResult();
    include 'pages/series.php';
}

else if(isset($_POST['primeBtn']))
{
    $prime = new Prime($_POST);
    $res = $prime->getPrime();
    include 'pages/prime.php';
}

else if(isset($_POST['evenOddBtn']))
{
    $evenOdd = new EvenOdd($_POST);
    $evenOddRes = $evenOdd->getResult();
    include 'pages/evenOdd.php';
}
else
{
    $home = new Home();
    $home->index();

}








