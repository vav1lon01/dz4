<?php
require_once "autoload.php";

$curr = new \Test\Dz4\Currency('USD');
$money = new \Test\Dz4\Money(10,$curr);
//var_dump($currency);
var_dump($money);