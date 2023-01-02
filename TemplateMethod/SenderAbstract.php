<?php

namespace pattern\TemplateMethod;

abstract class SenderAbstract
{
    public function send(array $users, string $subject)
    {
        $activeUsers = array_filter($users, function ($user) {
            return $user['lastLogin'] > new \DateTime('start year');
        });
        // Второй, пятый десятый

        foreach ($users as $user) {
            $this->transport();
        }

        // Двадцатое

    }

    abstract protected function transport();
}