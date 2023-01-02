<?php

namespace patterns\Observer;

class OrderManager
{
    public function exec(Order $order)
    {
        echo 'Start execute' . PHP_EOL;

        if (random_int(0,1)) {
            $order->activate();
        } else {
            $order->process();
        }
    }
}