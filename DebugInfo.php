<?php

require_once("data/Student.php");

$student1 = new Student();
$student2 = new Student();
$student1->id = "1";
$student1->nama = "Nay";
$student1->value = 100;

var_dump($student1);
var_dump($student2);