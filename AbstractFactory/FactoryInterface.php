<?php

namespace patterns\AbstractFactory;

interface FactoryInterface
{
    public function makeCar(EngineInterface $engine, TransmissionInterface $transmission): CarInterface;

    public function makeEngine(): EngineInterface;

    public function makeTransmission(): TransmissionInterface;
}