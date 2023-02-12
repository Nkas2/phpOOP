<?php

interface HelloWorld {
    public function sayHallo(): void;
}

$helloWorld = new class("Nayandra") implements HelloWorld{
    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
    public function sayHallo():void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHallo();