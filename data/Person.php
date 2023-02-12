<?php
/**
 * membuat class menggunkan keyword class
 * dan penamaan menggunkan CamelCase
 */
class Person  
{
    const AUTHOR = 'Nayandra Kastoro';
    public string $name;                           // deklarasi property name
    public ?string $address = null;                //deklarasi property address, " ? " berfungsi agar property dapat bernilai null
    public string $country = "Indonesia";          //deklarasi properti country dan menetapkan Default valuenya(jika tidak di set maka value dari country otomatis indonesia)

    /**
     * membuat construct
     */
    function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address = $address;
    }

    /**
     * Membuat function pada block class
     */
    function sayHallo (?String $name){
        if(is_null($name)){
            echo "Hallo {$this->name}" . PHP_EOL;
        }else {
            echo "Hallo $name, my name is {$this->name}" . PHP_EOL;
        }
    }

    function info(){
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    /**
     * destruct merupakan function yang dijalankan ketika object di hapus dari memori
     */
    function __destruct(){
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}