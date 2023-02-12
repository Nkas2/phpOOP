<?php

require_once("Data/Conflict.php");
require_once("Data/Helper.php");
/**
 * membuat object dari sebuah class yang ada di dalam namespace
 */
$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();
/**
 * cara mengakses sebuah function dan construct yang berada didalam namespace
 */
Helper\helpMe();
echo Helper\APPLICATION . PHP_EOL;