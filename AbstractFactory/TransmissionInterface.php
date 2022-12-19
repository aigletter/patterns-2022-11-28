<?php

namespace patterns\AbstractFactory;

interface TransmissionInterface
{
    public function switch(int $transmission);
}