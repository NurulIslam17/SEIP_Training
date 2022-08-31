<?php

require_once 'vendor\autoload.php';
use App\classes\Home;
use App\classes\Operator;

//$home = new Home();
//$home->waterpump('Asray','120/2C','RFL');
//$home->waterpump('Restrore','340/2V','Walton');


$operator = new Operator();
$operator->add(12,23);
$operator->sub(12,23);
$operator->mult(12,23);
$operator->div(0,5);
$operator->pow(4,2);
