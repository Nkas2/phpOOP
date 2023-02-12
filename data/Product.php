<?php

class Product {
    public $public; //Property ini dapat di akses dari manapun
    protected $protected; // Property ini dapat di akses oleh class saat ini dan class turunannya
    private $private; //property ini hanya dapat di akses oleh class saat ini saja.
    protected $name;
    private $price;

    /**
     * Summary of __construct
     * @param string $name
     * @param int $price
     * Function ini di set public sehingga dapat di akses dari manapun, walaupun
     * didalam function ini terdapat property name yang di set private, hal ini tidak 
     * akan terjadi error
     */
    public function __construct(string $name, int $price){
        $this->name = $name;    
        $this->price = $price;
    }

    /**
     * Summary of gantiNama
     * @param string $name
     * @return void
     * function dibawah berfungsi untuk mengubah value dari property yang sifatnya
     * private
     */
    public function gantiNama(string $name):void
    {
        $this->name = $name;
    }
    public function gantiHarga(int $price):void
    {
        $this->price = $price;
    }

    /**
     * Summary of tampilNama
     * @return void
     * function dibawah berfungsi untuk menampikan value
     * dari property yang sifatnya private
     */
    public function tampilNama():void
    {
        echo "Nama : $this->name" . PHP_EOL;
    }
    public function tampilHarga():void
    {
        echo "Harga : $this->price" . PHP_EOL;
    }
}

class TestProduct extends Product
{
    public function info():void
    {
        /**
         * property name ini berasal dari class parentnya yang sifatnya protected
         * sehingga class saat ini dapat menggunakan property tersebut.
         */
        echo "Nama : $this->name";
    }
}