<?php

namespace patterns\AbstractFactory;

class FordFactory implements FactoryInterface
{
    public function makeCar(EngineInterface $engine, TransmissionInterface $transmission): CarInterface
    {
        return new Ford($engine, $transmission);
    }

    public function makeEngine(): EngineInterface
    {
        return new FordEngine();
    }

    public function makeTransmission(): TransmissionInterface
    {
        return new FordTransmission();
    }
}