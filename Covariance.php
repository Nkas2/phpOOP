<?php
use Data\CatShelter;
use Data\DogShelter;

require_once("data/Animal.php");
require_once("data/AnimalShelter.php");

$catShelter = new CatShelter();
$catShelter->adopt("Joko");             // Returnnya adalah class Cat

$dogShelter = new DogShelter();
$dogShelter->adopt("joko");             // Returnnya adalah class Dog