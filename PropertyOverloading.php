<?php

class zero 
{
    private array $properties = [];
    
    /**
     * Summary of __set
     * @param mixed $name
     * @param mixed $value
     * @return void
     * function yang akan dieksekusi ketika mengubah property yang
     * tidak tersedia.
     */
    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }

    /**
     * Summary of __get
     * @param mixed $name
     * @return mixed
     * Function yang akan dieksekusi ketika mengakses property
     * yang tidak tersedia
     */
    public function __get($name)
    {
        return $this->properties[$name];
    }

    /**
     * Summary of __isset
     * @param mixed $name
     * Function ini akan dieksekusi ketika isset digunakan kepada 
     * sebuah object
     */
    public function __isset($name):bool
    {
        return isset($this->properties[$name]);
    }

    /**
     * Summary of __isset
     * @param mixed $name
     * Function ini akan dieksekusi ketika unset digunakan kepada 
     * sebuah object
     */
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    /**
     * Summary of __call
     * @param mixed $name
     * @param mixed $arguments
     * @return void
     * Function __call akan di eksekusi ketika ada sebuah function
     * yang tidak ada, namun dipanggil
     */
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Function $name, dengan argument $join";
    }

    /**
     * Summary of __callStatic
     * @param mixed $name
     * @param mixed $arguments
     * @return void
     * sama seperti diatas tapi static, selesai.
     */
    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Function $name, dengan argument $join";
    }
}

$zero = new Zero();             // Membuat Sebuah object
$zero->nama = "Nayandra";       // Membuat dynamic Property
echo $zero->nama;               // Menampilkan value dynamic property
echo isset($zero->nama);        // Periksa apakah ada property nama
unset($zero->nama);             // Menghapus property nama

$zero->sayHallo("Aku", "Keren", "Mantap");
Zero::sayHallo('keren', 'kali');