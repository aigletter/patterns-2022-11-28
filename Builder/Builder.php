<?php

namespace patterns\Builder;

class Builder implements BuilderInterface
{
    protected $floors;

    protected $mansarda = false;

    protected $tsokol = false;

    protected $balcony = false;

    protected $swimingPool = false;

    public function getFloors()
    {
        // TODO: Implement getFloors() method.
    }

    public function setFloors($floors): BuilderInterface
    {
        $this->floors = $floors;
        return $this;
    }

    public function getMansarda()
    {
        // TODO: Implement getMansarda() method.
    }

    public function setMansarda($mansarda): BuilderInterface
    {
        $this->mansarda = $mansarda;
        return $this;
    }

    public function getTsokol()
    {
        // TODO: Implement getTsokol() method.
    }

    public function setTsokol($tsokol): BuilderInterface
    {
        $this->tsokol = $tsokol;
        return $this;
    }

    public function getBalcony()
    {
        // TODO: Implement getBalcony() method.
    }

    public function setBalcony($balcony): BuilderInterface
    {
        $this->balcony = $balcony;
        return $this;
    }

    public function getSwimingPool()
    {
        // TODO: Implement getSwimingPool() method.
    }

    public function setSwimingPool($swimingPool): BuilderInterface
    {
        $this->swimingPool = $swimingPool;
        return $this;
    }

    public function build(): House
    {
        return new House(
            $this->floors,
            $this->mansarda,
            $this->tsokol,
            $this->balcony,
            $this->swimingPool
        );
    }
}