<?php

require_once("data/Programer.php");

$company = new Company();
$company->programer = new BackendProgramer('nayan');
var_dump($company);
$company->programer = new FrontendProgramer('nayan');
var_dump($company);

sayHalloProgramer(new Programer('Ny'));
sayHalloProgramer(new BackendProgramer('Nk'));
sayHalloProgramer(new FrontendProgramer('Na'));