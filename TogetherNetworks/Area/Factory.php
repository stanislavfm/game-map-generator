<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Area;

class Factory
{
    public static function createMountain(): Mountain
    {
        return new Mountain();
    }

    public static function createPlain(): Plain
    {
        return new Plain();
    }

    public static function createSwamp(): Swamp
    {
        return new Swamp();
    }

    public static function createWater(): Water
    {
        return new Water();
    }
}