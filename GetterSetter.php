<?php

require_once("data/Category.php");

$buku = new Category();

$buku->setName("Buku");
$buku->setExpensive(true);
$buku->setName("");

echo "Nama : {$buku->getName()}" . PHP_EOL;
echo "Mahal : {$buku->isExpensive()}" . PHP_EOL;