<?php

require_once __DIR__ . '/../../vendor/autoload.php';

function run(\patterns\AbstractFactory\FactoryInterface $factory)
{
    $engine = $factory->makeEngine();
    $transmission = $factory->makeTransmission();
    $car = $factory->makeCar($engine, $transmission);

    $car->move();
}

$factories[] = new \patterns\AbstractFactory\AudiFactory();
$factories[] = new \patterns\AbstractFactory\FordFactory();
foreach ($factories as $factory) {
    run($factory);
}