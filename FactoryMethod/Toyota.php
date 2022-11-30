<?php

namespace patterns\FactoryMethod;

class Toyota implements MovableInterface
{
    public function move(string $a, string $b, string $cargo)
    {
        echo 'I am Toyota and I am moving' . PHP_EOL;
    }
}