<?php

class Student {
    public string $id;
    public string $nama;
    public int $value;
    private string $sample;
    public function setSample (string $sample) {
        $this->sample = $sample;
    }
    /**
     * Summary of __clone
     * @return void
     * Function ini akan dieksekusi ketika sebuah object 
     * dibuat clonenya
     */
    public function __clone (){
        unset($this->sample);
    }
    /**
     * Summary of __toString
     * @return string
     * Function ini akan di eksekusi jika, 
     * object yang dibuat diubah tipenya menjadi string
     */
    public function __toString():string
    {
        return "String dari magic function __toString()";
    }
    /**
     * Summary of __invoke
     * @return void
     * Invoke function akan dieksekusi ketika sebuah objek 
     * dipanggil sebagaimana function di panggil
     */
    public function __invoke():void
    {
        echo "Hallo dari function invoke";
    }
    /**
     * function __debugeInfo() dipanggil ketika kita menggunakan vardump
     * pada sebuah object
     */
    public function __debugInfo():array
    {
        return [
            "pesan" => "Dari debug info",
        ];
    }
}