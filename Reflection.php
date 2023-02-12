<?php

require_once("Exception/ValidationException.php");
require_once("data/LoginRequest.php");
require_once("helper/ValidationUtil.php");

$request = new LoginRequest();
$request->username = "asd";
$request->password = null;

// ValidationUtil::validate($request);

try{
    ValidationUtil::validateReflection($request);
} catch (ValidateException $er){
    echo "error : {$er->getMessage()}" . PHP_EOL;
} 