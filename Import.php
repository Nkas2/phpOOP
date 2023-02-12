<?php

require_once("Data/Conflict.php");
require_once("Data/Helper.php");

/**
 * keyword use memudahkan kita untuk mengakses sebuah class, function, construct 
 * yang ada di dalam sebuah namespace
 */
use Data\One\Conflict;          //class
use function Helper\helpMe;     //function
use const Helper\APPLICATION;   // constant

/**
 * setelah menggunakan use kita tidak perlu lagi menulis namespace ketika
 * ingin menggunakannya
 */
$conflict1 = new Conflict();
/**
 * kita tetap bisa menggunakan namespace ketika ingin menggunakan
 * class yang lain
 */
$conflict2 = new Data\Two\Conflict();

/**
 * memanggil sebuah function
 */
helpMe();

/**
 * memanggil sebuah construct
 */
echo APPLICATION . PHP_EOL;