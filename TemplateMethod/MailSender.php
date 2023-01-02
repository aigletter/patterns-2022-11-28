<?php

namespace pattern\TemplateMethod;

class MailSender extends SenderAbstract
{
    protected function transport()
    {
        echo 'Техническая реализация отравки почты';
    }
}