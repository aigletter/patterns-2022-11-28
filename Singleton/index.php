<?php

require_once __DIR__ . '/../../vendor/autoload.php';

// olexandr
//$db = new \patterns\Singleton\Db();
$db1 = \patterns\Singleton\Db::getInstance();
$orders = $db1->query();
// Работает с заказами


// sergey
//$db = new \patterns\Singleton\Db();
$db2 = \patterns\Singleton\Db::getInstance();
$user = $db2->get();
// Работает с пользователями


// olesia
//$db = new \patterns\Singleton\Db();
$db3 = \patterns\Singleton\Db::getInstance();
$products = $db3->query();

exit();