<?php
use Data\{Shape, Rectangle};

require_once("data/Shape.php");

$shape = new Shape();
$a = $shape->getCorner();
echo $a . PHP_EOL;

$rectangle = new Rectangle();
$a = $rectangle->getCorner();
echo $a . PHP_EOL;
$a = $rectangle->getParentCorner();
echo $a . PHP_EOL;