<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

 
$hello = new Hello();
echo $hello->talk();
$hello = new SayHello();
echo $hello->world();