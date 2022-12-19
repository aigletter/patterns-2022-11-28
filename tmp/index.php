<?php

require_once __DIR__ . '/../vendor/autoload.php';

function run(string $a, string $b, string $cargo)
{
    $car = (new \patterns\CarFactory())->make();
    $car->go($a, $b, $cargo);
}

run('11.22', '33.44', 'notebook');