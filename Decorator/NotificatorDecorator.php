<?php

namespace patterns\Decorator;

abstract class NotificatorDecorator implements NotificatorInterface
{
    protected $notificator;

    public function __construct(NotificatorInterface $notificator)
    {
        $this->notificator = $notificator;
    }
}