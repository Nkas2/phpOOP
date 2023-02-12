<?php

require_once("data/Student.php");

$student1 = new Student();
$student1->id = "1";
$student1->nama = "Nay";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->nama = "Nay";
$student2->value = 100;

var_dump($student1 == $student2); // true, melihat propertynya
var_dump($student1 === $student2); // false
var_dump($student1 === $student1); // true, dilihat dari letak di memori