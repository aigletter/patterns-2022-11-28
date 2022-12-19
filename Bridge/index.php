<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$format = 'csv';

$order = new \patterns\Bridge\Order();
//$user = new \patterns\Bridge\User();

switch ($format) {
    case 'json':
        $formatter = new \patterns\Bridge\JsonFormatter();
        break;
    case 'csv':
        $formatter = new \patterns\Bridge\CsvFormatter();
        break;
}

$reporter = new \patterns\Bridge\OrderReporter($formatter);
//$reporter = new \patterns\Bridge\UserReporter($formatter);
$reporter->report($order, __DIR__);

exit();