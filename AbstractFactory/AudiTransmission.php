<?php

namespace patterns\AbstractFactory;

class AudiTransmission implements TransmissionInterface
{
    public function switch(int $transmission)
    {
        echo 'Switched transmission ' . $transmission . PHP_EOL;
    }
}