<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Area;

use TogetherNetworks\Unit;

class Swamp extends AbstractArea
{
    public function isPossibleUnitPlacing(Unit\UnitInterface $unit): bool
    {
        if ($unit instanceof Unit\Human) {
            return false;
        }

        if ($unit instanceof Unit\Base) {
            return false;
        }

        return true;
    }
}