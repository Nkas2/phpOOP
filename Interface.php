<?php

require_once("data/Car.php");
use Data\{Avanza};

$car = new Avanza();
$car->Drive();
echo $car->getTired();
echo $car->getBrand();