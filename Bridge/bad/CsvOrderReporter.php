<?php

namespace patterns\Bridge;

class CsvOrderReporter
{
    public function generate(Order $order, string $dir)
    {
        $filename = $dir . '/order-' . $order->getId() . '.csv';
        $file = fopen($filename, 'w');
        fwrite($file, 'id,date,sum' . PHP_EOL);
        fwrite($file, $order->getId() . ',' . $order->getDate() . ',' . $order->getSum() . PHP_EOL);
        fclose($file);
    }
}