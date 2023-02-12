<?php

class ValidationUtil{
    static function validate(LoginRequest $request){
        if (!isset($request->username)){
            throw new ValidateException("username is null");
        } else if (!isset($request->password)){
            throw new ValidateException("Password is null");
        }
    }

    static function validateReflection($request){
        // var_dump($request); //object
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        // var_dump($properties); //array
        foreach($properties as $property){
            // var_dump($property);
            if (!$property->isInitialized($request)){
                throw new ValidateException("{$property->name} is not set");
            } else if (is_null($property->getValue($request))){
                // var_dump($property->getValue($request));
                throw new ValidateException("{$property->name} is null");
            } else if (trim($property->getValue($request)) == "") {
                throw new ValidateException("{$property->name} is empty");
            } else if ($property->getName() == "password"){
                // echo "asd";
                $pass = $property->getValue($request);
                if (strlen($pass) <= 6) {
                    throw new ValidateException("passwords are not long enough");
                }
            } 
        }
    } 
}