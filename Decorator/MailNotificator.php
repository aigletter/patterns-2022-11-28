<?php

namespace patterns\Decorator;

class MailNotificator implements NotificatorInterface
{
    public function notify(array|string $to, string $subject, string $message)
    {
        echo 'Email sending - ' . $subject . ' - ' . $message . PHP_EOL;
    }
}