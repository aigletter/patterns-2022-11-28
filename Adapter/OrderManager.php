<?php

namespace patterns\Adapter;

class OrderManager
{
    protected $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function exec(array $data)
    {
        // Много строк сложного кода
        // Created order
        echo 'Заказ сохранен в базу данных' . PHP_EOL;

        $this->mailer->mail($data['email'], 'Order created', 'Ваш заказ успешно создан');
    }
}