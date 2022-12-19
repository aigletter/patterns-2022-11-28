<?php

namespace patterns\Decorator;

class PushNotificatorDecorator extends NotificatorDecorator
{
    public function notify(array|string $to, string $subject, string $message)
    {
        $this->notificator->notify($to, $subject, $message);
        echo 'Push message was sent' . PHP_EOL;
    }
}