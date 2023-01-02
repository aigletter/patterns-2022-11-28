<?php

namespace patterns\Observer;

class Notifier implements \SplObserver
{
    /**
     * @param \SplSubject|Order $subject
     * @return void
     */
    public function update(\SplSubject $subject)
    {
        echo 'I am notifier.' . PHP_EOL
            . 'Status was changed to ' . $subject->getStatus() . PHP_EOL;
    }
}