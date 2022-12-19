<?php

require_once __DIR__ . '/../../vendor/autoload.php';

//$mailer = new \patterns\Adapter\Mailer();
$phpMailer = new \PHPMailer\PHPMailer\PHPMailer();
$mailer = new \patterns\Adapter\MailerAdapter($phpMailer);
$manager = new \patterns\Adapter\OrderManager($mailer);

$manager->exec([
    'email' => 'helloworld@gmail.com'
]);

