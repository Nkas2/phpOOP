<?php

require_once("data/Manajer.php");

$manager = new Manajer();
$manager->name = 'udin';
$manager->sayHallo("jeki");

$vp = new VicePresident();
$vp->name = "Nayandra";
$vp->sayHallo("jeki");