<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Area;

use TogetherNetworks\Unit;

class Plain extends AbstractArea
{
    public function isPossibleUnitPlacing(Unit\AbstractUnit $unit): bool
    {
        return true;
    }
}