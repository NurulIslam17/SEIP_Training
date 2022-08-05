<?php
require_once "vendor/autoload.php";
use App\classes\Home;

$homeObj = new Home();
echo $homeObj->index();
