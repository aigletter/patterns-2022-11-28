<?php

namespace patterns;

class CarFactory
{
    public function make()
    {
        $something = new \patterns\Something('sho-popalo');
        $porshen = new \patterns\Porshen($something);
        $engine = new \patterns\Engine($porshen);
        $car = new \patterns\Car($engine);

        return $car;
    }
}