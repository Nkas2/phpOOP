<?php




namespace Data{
    require_once("Food.php");
    abstract class Animal 
    {
        public string $name;

        abstract public function run();
        abstract public function eat(AnimalFood $food): void;
    }
    class Cat extends Animal
    {
        public function run(){
            echo "Cat $this->name Is Running" . PHP_EOL;
        }

        public function eat(AnimalFood $food){
            echo "Cat is eating" . PHP_EOL;
        }

    }
    class Dog extends Animal
    {
        public function run(){
            echo "Dog $this->name Is Running" . PHP_EOL;
        }
        public function eat(Food $food){
            echo "Dog is eating";
        }
    }
}