<?php

namespace Data\Traits;
trait SayGoodBye
{
    public function goodBye(?string $name):void
    {
        if(is_null($name)){
            echo "Good Bye";
        }else{
            echo "Good Bye $name";
        }
    }
}
trait SayHallo
{
    public function hallo(?string $name):void
    {
        if(is_null($name)){
            echo "Hallo";
        }else{
            echo "Hallo $name";
        }
    }
}
trait Name{
    public string $name;
}
trait CanRun{
    abstract public function Run(): void;
}
  /**
   * traith inheritance traith
   */
trait All
{
    use SayHallo, SayGoodBye, Name, CanRun;
}


class Person{
    use all;
    
    public function Run():void
    {
        echo "Person {$this->name} is Running" . PHP_EOL;
    }

}