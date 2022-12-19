<?php

namespace patterns\AbstractFactory;

class AudiEngine implements EngineInterface
{
    public function start()
    {
        echo 'Brrr-brr-brr' . PHP_EOL;
    }

    public function stop()
    {
        echo 'Stop';
    }
}