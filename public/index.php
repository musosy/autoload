<?php
require_once __DIR__ . '/../vendor/autoload.php';

//use App\Wcs\Hello;
use HelloWorld;
use HelloWorld\SayHello;

/* 
$hello = new Hello();
$hello->talk(); */
$hello = new SayHello();
echo $hello->world();