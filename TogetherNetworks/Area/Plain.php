<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Area;

use TogetherNetworks\Unit;

class Plain extends AbstractArea
{
    public function isPossibleUnitPlacing(Unit\UnitInterface $unit): bool
    {
        return true;
    }
}