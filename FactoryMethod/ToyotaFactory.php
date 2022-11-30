<?php

namespace patterns\FactoryMethod;

class ToyotaFactory extends Factory
{
    protected function makeConcrete(): MovableInterface
    {
        return new Toyota();
    }
}