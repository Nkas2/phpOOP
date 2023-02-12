<?php

trait A{
    public function doA():void
    {
        echo "a" . PHP_EOL;
    }
    public function doB():void
    {
        echo "b" . PHP_EOL;
    }
}
trait B{
    public function doA():void
    {
        echo "A" . PHP_EOL;
    }
    public function doB():void
    {
        echo "B" . PHP_EOL;
    }
}
class Sample{
    use A,B{
        /**
         * Artinya function doA akan diprioritaskan dari traith A daripada trait B.
         */
        A::doA insteadof B;
        /**
         * Artinya function doB akan diprioritaskan dari traith B daripada trait A.
         */
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();