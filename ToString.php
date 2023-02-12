<?php

require_once("data/Student.php");

$student1 = new Student();
$student2 = new Student();
$student1->id = "1";
$student1->nama = "Nay";
$student1->value = 100;

/** 
 * mengakses function __toString()
 */
$string1 = (string) $student1;
$string2 = (string) $student2;

/** 
 * mengakses function __toString()
 */
echo $string1;
echo $string2;

echo $student1;
echo $student2;