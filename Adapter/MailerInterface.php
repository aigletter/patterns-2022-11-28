<?php

namespace patterns\Adapter;

interface MailerInterface
{
    public function mail(string $to, string $subject, string $text): bool;
}