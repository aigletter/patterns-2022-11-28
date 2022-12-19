<?php

namespace patterns\Adapter;

use PHPMailer\PHPMailer\PHPMailer;

class MailerAdapter implements MailerInterface
{
    protected $phpMailer;

    public function __construct(PHPMailer $phpMailer)
    {
        $this->phpMailer = $phpMailer;
    }

    public function mail(string $to, string $subject, string $text): bool
    {
        $this->phpMailer->addAddress($to);
        $this->phpMailer->Subject = $subject;
        $this->phpMailer->Body = $text;
        $this->phpMailer->isSMTP();

        try {
            $this->phpMailer->send();
            echo 'PHPMailer sent message' . PHP_EOL;
            return true;
        } catch (\Throwable $exception) {
            return false;
        }
    }
}