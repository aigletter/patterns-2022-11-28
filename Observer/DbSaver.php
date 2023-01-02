<?php

namespace patterns\Observer;

class DbSaver implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo 'Я записал в базу статус ' . $subject->getStatus() . PHP_EOL;
    }
}