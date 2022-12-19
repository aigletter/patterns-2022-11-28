<?php

namespace patterns\Decorator;

class OrderManager
{
    protected $notificator;

    public function __construct(NotificatorInterface $notificator)
    {
        $this->notificator = $notificator;
    }

    public function exec(array $data)
    {
        // Много строк сложного кода
        // Created order
        echo 'Заказ сохранен в базу данных' . PHP_EOL;

        $this->notificator->notify($data['email'], 'Order created', 'Ваш заказ успешно создан');
    }
}