<?php

function ValidateLoginRequest (LoginRequest $request){
    if (!isset($request->username)){
        throw new ValidateException("Username is Null");
    } else if (!isset($request->password)){
        throw new ValidateException("Password is  Null");
    } else if (trim($request->username) == ""){
        throw new Exception("Username is empty");
    } else if (trim($request->password) == ""){
        throw new Exception("Password is empty");   
    }
}