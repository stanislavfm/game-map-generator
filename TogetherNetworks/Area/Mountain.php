<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Area;

use TogetherNetworks\Unit;

class Mountain extends AbstractArea
{
    public function isPossibleUnitPlacing(Unit\AbstractUnit $unit): bool
    {
        if ($unit instanceof Unit\Equipment) {
            return false;
        }

        if ($unit instanceof Unit\Base) {
            return false;
        }

        return true;
    }
}