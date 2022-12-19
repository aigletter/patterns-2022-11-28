<?php

namespace patterns\Decorator;

class CmsNotificatorDecorator extends NotificatorDecorator
{
    public function notify(array|string $to, string $subject, string $message)
    {
        $this->notificator->notify($to, $subject, $message);

        echo 'Cms was sent successfully - ' . $to . ' - ' . $subject . ' - ' . $message . PHP_EOL;
    }
}