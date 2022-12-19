<?php

namespace patterns\Builder;

interface BuilderInterface
{
    /**
     * @return mixed
     */
    public function getFloors();

    /**
     * @param mixed $floors
     */
    public function setFloors($floors): BuilderInterface;

    /**
     * @return mixed
     */
    public function getMansarda();

    /**
     * @param mixed $mansarda
     */
    public function setMansarda($mansarda): BuilderInterface;

    /**
     * @return mixed
     */
    public function getTsokol();

    /**
     * @param mixed $tsokol
     */
    public function setTsokol($tsokol): BuilderInterface;

    /**
     * @return mixed
     */
    public function getBalcony();

    /**
     * @param mixed $balcony
     */
    public function setBalcony($balcony): BuilderInterface;

    /**
     * @return mixed
     */
    public function getSwimingPool();

    /**
     * @param mixed $swimingPool
     */
    public function setSwimingPool($swimingPool): BuilderInterface;

    public function build(): House;
}