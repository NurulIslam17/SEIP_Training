<?php

require_once 'vendor\autoload.php';
use App\classes\Home;

$home = new Home();
$home->waterpump('Asray','120/2C','RFL');
$home->waterpump('Restrore','340/2V','Walton');

