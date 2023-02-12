<?php

require_once("Data/Conflict.php");
require_once("Data/Helper.php");

/**
 * untuk mempermudah kita juga bisa menggunakan alias(as)
 * dan alias juga memungkinkan kita untuk memanggil class yang 
 * namanya sama.
 */
use Data\One\Conflict as Confilct1;
use Data\Two\Conflict as Confilct2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as app;

$confilct1 = new Confilct1();
$conflict2 = new Confilct2();

help();

echo app . PHP_EOL;