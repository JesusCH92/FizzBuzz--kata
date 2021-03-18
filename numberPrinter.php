<?php

use App\CyberClick;
use App\NumbersGenerator;

require 'vendor/autoload.php';

$generator = new NumbersGenerator();
$message = new CyberClick();

foreach ($generator->generateNumbers(1,100) as $number) {
    echo $message($number) . PHP_EOL;
}