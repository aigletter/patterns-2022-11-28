<?php

namespace patterns\FactoryMethod;

abstract class Factory
{
    public function make(): MovableInterface
    {
        return $this->makeConcrete();
    }

    abstract protected function makeConcrete(): MovableInterface;
}