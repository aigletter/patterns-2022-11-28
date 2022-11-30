<?php

namespace patterns\FactoryMethod;

class Ford implements MovableInterface
{
    public function move(string $a, string $b, string $cargo)
    {
        echo 'I am ford and I am moving' . PHP_EOL;
    }
}