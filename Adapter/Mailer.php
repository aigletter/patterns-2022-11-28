<?php

namespace patterns\Adapter;

class Mailer implements MailerInterface
{
    public function mail(string $to, string $subject, string $text): bool
    {
        // mail
        echo 'Mail to ' . $to . ' with subject ' . $subject . ' was sent successfully' . PHP_EOL;
        return true;
    }
}