<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks;

class UnitFactory
{
    public function createAircraft(): Unit\Aircraft
    {
        return new Unit\Aircraft();
    }

    public function createBase(): Unit\Base
    {
        return new Unit\Base();
    }

    public function createEquipment(): Unit\Equipment
    {
        return new Unit\Equipment();
    }

    public function createHuman(): Unit\Human
    {
        return new Unit\Human();
    }
}