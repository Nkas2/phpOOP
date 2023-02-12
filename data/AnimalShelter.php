<?php
namespace Data;
require_once("Animal.php");

interface AnimalShelter
{
    function adopt(string $name): Animal;           // Returnnya adalah class Animal
}

class CatShelter implements AnimalShelter
{
    
	/**
	 * @param string $name
	 * @return Animal
	 */
	public function adopt(string $name): Cat {      // Returnnya di ubah menjadi class turunan dari Animal yaitu Cat
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
	}
}

class DogShelter implements AnimalShelter
{
    
	/**
	 * @param string $name
	 * @return Animal
	 */
	public function adopt(string $name): Dog {      // Returnnya di ubah menjadi class turunan dari Animal yaitu Dog
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
	}
}

/**
 * Covariant adalah mengubah return dari sebuah function yang ada di parent,
 * menjadi lebih specific
 */