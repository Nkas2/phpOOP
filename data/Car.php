<?php

namespace Data;

interface HasBrand{
    function getBrand(): string;
}

interface isMaintenance{
    function isMaintenance(): bool;
}

/**
 * interface inheritence interface
 */
interface Car extends HasBrand
{
    function Drive(): void;
    function getTired(): int;
}

class Avanza implements Car, isMaintenance
{
    public function Drive():void
    {
        echo "Drive Avanza" . PHP_EOL;
    }
    public function getTired():int
    {
        return 4;
    }
    public function getBrand():string{
        return "Toyota";
    }
    public function isMaintenance():bool
    {
        return false;
    }
}