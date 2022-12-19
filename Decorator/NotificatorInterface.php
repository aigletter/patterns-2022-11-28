<?php

namespace patterns\Decorator;

interface NotificatorInterface
{
    public function notify(array|string $to, string $subject, string $message);
}