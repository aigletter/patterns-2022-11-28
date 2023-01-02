<?php

namespace pattern\TemplateMethod;

class SmsSender extends SenderAbstract
{
    protected function transport()
    {
        echo 'Техническое обеспечение передачи СМС' . PHP_EOL;
    }
}