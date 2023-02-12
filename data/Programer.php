<?php

class Programer{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgramer extends Programer
{   
}

class FrontendProgramer extends Programer
{
}

class Company
{
    public Programer $programer;
}

function sayHalloProgramer(Programer $programer):void
{
    if($programer instanceof BackendProgramer){
        echo "Hello Backend Programer $programer->name" . PHP_EOL;
    } elseif ($programer instanceof FrontendProgramer) {
        echo "Hello Frontend Programer $programer->name" . PHP_EOL;
    } else {
        echo "Hello Programer $programer->name" . PHP_EOL;
    }
}