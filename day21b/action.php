<?php

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
      else if($_GET['page']== 'fulname')
      {
          include 'pages/fullname.php';
      }

}