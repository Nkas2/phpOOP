<?php

require_once("helper/MathHelper.php");

use Helper\MathHelper;

/**
 * cara mengakses static property
 */
echo MathHelper::$name . PHP_EOL;

/**
 * cara merubah static property
 */
MathHelper::$name = "Eres";
echo MathHelper::$name . PHP_EOL;

/**
 * mengakses sebuah static function
 */
$result = MathHelper::sum(1, 2, 3, 4, 5, 6, 7, 8, 9);
echo $result . PHP_EOL;