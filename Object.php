<?php
require_once("data/Person.php");
/** 
 * membuat object dari class persom
 * menggunkan keyword new
 */
$person = new Person("Nayandra", "Batam");
$person2 = new Person("Batam", null);

/**
 * untuk memanipulasi value dari property bisa menggunakan " -> " setelah
 * nama object dan di ikuti nama property.
 */
$person->country = "Indonesia";

$person2->address = "Bandung";
$person2->country = "Indonesia";

/**
 * dan untuk mengambil value dari property bisa menggunakan " {$object -> property}.
 */
echo "Name : {$person->name}" . PHP_EOL;
echo "Alamat : {$person->address}" . PHP_EOL;
echo "Negara : {$person->country}".PHP_EOL;
echo "Name : {$person2->name}" . PHP_EOL;
echo "Alamat : {$person2->address}" . PHP_EOL;
echo "Negara : {$person2->country}".PHP_EOL;

/**
 * memanggil fuction pada class
 */
$person->sayHallo("joko");
$person->sayHallo(null);
$person->info();

$person2->sayHallo("gege");
$person2->sayHallo(null);
$person2->info();


/**
 * memanggil constant
 */
echo Person::AUTHOR . PHP_EOL;


// var_dump($person);