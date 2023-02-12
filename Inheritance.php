<?php

require_once("data/Manajer.php");

$manajer = new Manajer();
$manajer->name = "Nayandra";
$manajer->sayHallo("mahmud");

$vp = new VicePresident();
$vp->name = "udin";
$vp->sayHallo("midi");