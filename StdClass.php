<?php

$nayandra = [
    "firstName" => "Nayandra",
    "lastName" => "Kastoro",
    "address" => "Batam",
];
echo $nayandra["firstName"] . PHP_EOL;

/**
 * menggubah sebuah array menjadi sebuah object
 */

$objectNayandra = (object) $nayandra;
echo $objectNayandra->firstName . PHP_EOL;

var_dump($objectNayandra);

/**
 * Untuk mengubahnya menjadi array bisa dengan
 */
$arrayLagi = (array) $objectNayandra;
var_dump($arrayLagi);