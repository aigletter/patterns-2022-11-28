<?php

namespace patterns\AbstractFactory;

class AudiFactory implements FactoryInterface
{
    public function makeCar(EngineInterface $engine, TransmissionInterface $transmission): CarInterface
    {
        return new Audi($engine, $transmission);
    }

    public function makeEngine(): EngineInterface
    {
        return new AudiEngine();
    }

    public function makeTransmission(): TransmissionInterface
    {
        return new AudiTransmission();
    }
}