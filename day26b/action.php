<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Auth;

if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page']=='about')
    {
        include "pages/about.php";
    }
    elseif ($_GET['page']=='contact')
    {
        include 'pages/contact.php';
    }
    elseif($_GET['page']=='login')
    {
        include 'pages/login.php';
    }
}
elseif (isset($_POST['login']))
{
    $login = new Auth($_POST);
    $logAuth = $login->authenTic();
    include 'pages/login.php';
}