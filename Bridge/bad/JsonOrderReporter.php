<?php

namespace patterns\Bridge;

class JsonOrderReporter
{
    public function generate(Order $order, string $dir)
    {
        $json = json_encode([
            'id' => $order->getId(),
            'date' => $order->getDate(),
            'sum' => $order->getSum()
        ]);

        $filename = $dir . '/order-' . $order->getId() . '.json';

        file_put_contents($filename, $json);
    }
}