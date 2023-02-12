<?php

class Manajer
{
    var string $name;
    var string $title;

    /**
    * pembuatan constructor
    */
    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHallo(string $name):void
    {
        echo "Hallo $name, my name is manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manajer
{
    /**
     * Hal dibawah ini merupakan cara override constructor 
     * yang disarankan. Dengan cara membuat function, yang didalam
     * function tersebut kita memanggil constructor yang ada di parent classnya
     */
    public function __construct(string  $name= "", string  $title= "VP")
    {
        parent::__construct($name, $title);
    }

    /**
     * Summary of sayHallo
     * @param string $name
     * @return void
     * function dibawah melakukan overriding terhadap function di class parentnya 
     * sehingga fuction parentnya sudah tidak bisa di akses
     */
    public function sayHallo(string $name):void
    {
        echo "Hallo $name, my name is VP $this->name";
    }
}