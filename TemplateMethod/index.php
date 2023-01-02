<?php

$mailSender = new \pattern\TemplateMethod\MailSender();
$mailSender->send([], '');

$smsSender = new \pattern\TemplateMethod\SmsSender();
$smsSender->send([], '');