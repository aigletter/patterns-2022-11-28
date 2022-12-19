<?php

namespace patterns\Bridge;

class Order
{
    protected int $id = 100;

    protected string $date = '2022-11-11';

    protected float $sum = 1010.22;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }
}