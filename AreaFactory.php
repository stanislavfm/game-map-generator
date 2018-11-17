<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks;

class AreaFactory
{
    public function createMountain(): Area\Mountain
    {
        return new Area\Mountain();
    }

    public function createPlain(): Area\Plain
    {
        return new Area\Plain();
    }

    public function createSwamp(): Area\Swamp
    {
        return new Area\Swamp();
    }

    public function createWater(): Area\Water
    {
        return new Area\Water();
    }
}