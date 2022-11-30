<?php

namespace patterns\FactoryMethod;

class FordFactory extends Factory
{
    protected function makeConcrete(): MovableInterface
    {
        return new Ford();
    }
}