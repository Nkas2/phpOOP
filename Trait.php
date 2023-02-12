<?php

require_once("data/SayGoodBye.php");

use Data\Traits\{Person};

$person = new Person();
$person->goodBye("Joko");
$person->hallo("Budi");
$person->name = "Nayan";
$person->Run();
var_dump($person);