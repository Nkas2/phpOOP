<?php

require_once("data/Product.php");

$apple = new Product("apel", 15000);

// $apple->name = "ganti"; // ini akan error karena kita tidak bisa mengakses property private yang ada di class
/**
 * untuk menggubah kita dapat membuat sebuah function di dalam class tersebut,
 * function tersebut berisi perintah untuk mengubah value property
 */
$apple->gantiNama("apple");
$apple->gantiHarga(25000);

/**
 * dan untuk mengakses property private kita juga bisa membuat function yang 
 * menghasilkan value dari property
 */
$apple->tampilNama();
$apple->tampilHarga();

$testProduct = new TestProduct("Test", 10000);
$testProduct->info();