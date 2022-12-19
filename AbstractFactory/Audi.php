<?php

namespace patterns\AbstractFactory;

class Audi implements CarInterface
{
    protected $engine;

    protected $transmission;

    public function __construct(EngineInterface $engine, TransmissionInterface $transmission)
    {
        $this->engine = $engine;
        $this->transmission = $transmission;
    }

    public function move()
    {
        echo 'I am Audi' . PHP_EOL;
    }
}