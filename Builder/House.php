<?php

namespace patterns\Builder;

class House
{
    protected $floors;

    protected $mansarda;

    protected $tsokol;

    protected $balcony;

    protected $swimingPool;

    public function __construct(
        int $floors,
        bool $mansarda = false,
        bool $tsokol = false,
        bool $balcony = false,
        bool $swimingPool = false
    ) {
        $this->floors = $floors;
        $this->mansarda = $mansarda;
        $this->tsokol = $tsokol;
        $this->swimingPool = $swimingPool;
        $this->balcony = $balcony;
    }
}