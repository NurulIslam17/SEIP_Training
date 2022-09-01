<?php
require_once 'vendor\autoload.php';
use App\classes\Home;

$home = new Home();
$home->index();
$home->evenOdd(4);
$home->greaterNumber3(90,91,99);
