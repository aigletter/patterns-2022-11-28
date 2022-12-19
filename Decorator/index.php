<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$notificator = new \patterns\Decorator\MailNotificator();
$notificator = new \patterns\Decorator\CmsNotificatorDecorator($notificator);
$notificator = new \patterns\Decorator\PushNotificatorDecorator($notificator);
$orderManager = new \patterns\Decorator\OrderManager($notificator);

$orderManager->exec([
    'email' => 'hello.world@gmail.com'
]);

exit();