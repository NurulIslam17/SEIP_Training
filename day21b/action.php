<?php
require_once 'vendor/autoload.php';
use App\classes\Fullname;
use App\classes\Home;
use App\classes\Calculator;

    if(isset($_GET['page']))
    {
      if($_GET['page'] == 'home')
      {
        include 'pages/home.php';
      }
      else if($_GET['page'] == 'about')
      {
          include 'pages/about.php';
      }
      else if($_GET['page'] =='calculator')
      {
          include "pages/calculator.php";
      }
      else if($_GET['page']== 'fullname')
      {
          include 'pages/fullname.php';
      }
    }

    else if(isset($_POST['fullname_btn']))
    {
        $fullname = new Fullname($_POST);
        $result = $fullname->getFullName();
        include 'pages/fullname.php';
    }

    else if(isset($_POST['result']))
    {
        $calculator = new Calculator($_POST);
        $result = $calculator->getNumber();
        include 'pages/calculator.php';
    }

    else
    {
        $home = new Home();
        $home->index();
//        include 'pages/notfound.php';
    }