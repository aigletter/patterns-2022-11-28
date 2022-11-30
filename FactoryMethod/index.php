<?php

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * @param string $a
 * @param string $b
 * @param string $cargo
 * @param \patterns\FactoryMethod\Factory[] $factories
 * @return void
 */
function run(string $a, string $b, string $cargo, array $factories)
{
    foreach ($factories as $factory) {
        $car = $factory->make();
        $car->move($a, $b, $cargo);
    }
}

$factories[] = new \patterns\FactoryMethod\FordFactory();
$factories[] = new \patterns\FactoryMethod\ToyotaFactory();
run('11.22', '33.44', 'notebook', $factories);

