<?php

class Data implements IteratorAggregate
{
    var string $first = "first";
    public string $second = "second";
    protected string $third = "third";
    private string $forth = "forth";
    public function getIterator():Traversable|array
    {     
        yield 'first' => $this->first;
        yield 'second' => $this->second;
        yield 'third' => $this->third;
        yield 'forth' => $this->forth;
    }
}

$data = new Data();

print_r($data->getIterator());
var_dump($data->getIterator());

foreach($data as $key=>$value){
    if ($key == 'third'){
        
    } else {
        echo "$key : $value" . PHP_EOL;
    }
}