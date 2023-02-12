<?php

$matches = [];
$asd = preg_match_all("/o/i", "Nayandra Kastoro", $matches);

var_dump($asd);
var_dump($matches);

$ddd = preg_replace("/anjing|bangsat/i", "***" , "dasar lu anjing bangsat");
var_dump($ddd);