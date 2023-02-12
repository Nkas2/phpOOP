<?php

function getGanjil(int $max):Iterator
{
    for($i = 1; $i <= $max; $i++){
        if ($i % 2 == 1){
            yield $i;
        }
    }
}

foreach(getGanjil(50) as $value){
    echo "ganjil $value" . PHP_EOL;
}