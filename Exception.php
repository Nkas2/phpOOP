<?php

require_once("data/LoginRequest.php");
require_once("Exception/ValidationException.php");
require_once("helper/Validation.php");

$loginRequest = new LoginRequest();
$loginRequest->username = "nayan";
$loginRequest->password= "";

try{
    ValidateLoginRequest($loginRequest);    
} catch (ValidateException | Exception $error){
    echo "Error : {$error->getMessage()}";
    // var_dump($error->getTrace());
    // echo $error->getTraceAsString();
} finally {
    echo "Error tidak error, kode tetap akan di panggil" . PHP_EOL;
}