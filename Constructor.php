<?php

require_once("data/Person.php");

/** 
 * karena pada class sudah di buat sebuah construct, maka ketika membuat sebuah object
 * kita diharuskan memasukan sebuah value pada parameternya, jika tidak akan terjadi 
 * error
 */
$me = new Person("Me", "Here");