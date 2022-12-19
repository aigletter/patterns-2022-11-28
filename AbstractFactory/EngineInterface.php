<?php

namespace patterns\AbstractFactory;

interface EngineInterface
{
    public function start();

    public function stop();
}