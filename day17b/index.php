<?php
require_once "vendor/autoload.php";
use App\classes\Fullname;

$fnObj = new Fullname();
//echo $fnObj->fnFunc();

echo $fnObj->arrayFunc();