<?php

require_once __DIR__ . '/../../vendor/autoload.php';

// 2 этажа
// с басейном

/*$tsokol = false;
if ($client->hasMoney) {
    $tsokol = true;
}*/
//$house = new \patterns\Builder\House(2, false, false, false, true);

$builder = new \patterns\Builder\Builder();
$builder->setFloors(2);
if (true) {
    $builder->setSwimingPool(true);
}
$house = $builder->build();

$builder = new \patterns\Builder\Builder();
$house2 = $builder->setFloors(4)->setBalcony(true)->setMansarda(true)->build();

//$house = $builder->setFloors(2)->setSwimingPool(true)->build();

exit();