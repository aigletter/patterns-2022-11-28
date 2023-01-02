<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$orderManager = new \patterns\Observer\OrderManager();

$order = new \patterns\Observer\Order();

$observer = new \patterns\Observer\Notifier();

if (random_int(0, 1)) {
    $order->attach($observer);
}


$order->attach(new \patterns\Observer\DbSaver());

$orderManager->exec($order);

exit();