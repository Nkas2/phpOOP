<?php

namespace Helper;

class MathHelper
{
    static string $name = "Nayandra Kastoro";

    static public function sum(int ...$numbers):int
    {
        $total = 0;
        foreach ($numbers as $key => $value) {
            $total += $value;
        }
        return $total;
    }
}