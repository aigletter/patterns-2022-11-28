<?php

namespace patterns\Observer;

interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}