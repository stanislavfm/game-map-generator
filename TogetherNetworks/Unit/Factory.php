<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Unit;

class Factory
{
    public static function createAircraft(): Aircraft
    {
        return new Aircraft();
    }

    public static function createBase(): Base
    {
        return new Base();
    }

    public static function createEquipment(): Equipment
    {
        return new Equipment();
    }

    public static function createHuman(): Human
    {
        return new Human();
    }

    public static function createNone(): None
    {
        return new None();
    }
}